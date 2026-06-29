<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("index");
Route::get("/{product}", [HomeController::class, "productShow"])->name("frontend.product.show");

Route::resources([
    "products" => ProductController::class,
]);
