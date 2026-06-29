<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::select("name", "slug", "image", "price", "currency")->get();
        return view("index", compact("products"));
    }

    public function productShow(string $slug)
    {
        $product = Product::where("slug", $slug)->first();
        return view("product", compact("product"));
    }
}
