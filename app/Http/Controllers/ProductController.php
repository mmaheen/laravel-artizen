<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::latest()
            ->paginate(15);
        return view("products.list", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("products.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        //
        $data = $request->validated();
        $data["slug"] = Str::slug($data["name"]) . "-" . uniqid();
        $image_name = null;
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image_name = "Product_" . uniqid() . "_uploaded_at_" . time() . "." . $image->getClientOriginalExtension();
            $image->storeAs("uploads/products/", $image_name, 'public');
            $data["image"] = $image_name;
        }
        // return $data;
        $product = Product::create($data);
        return redirect()->route("products.index")->with("success", "Product created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
