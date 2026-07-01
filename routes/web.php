<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("index");
Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");

Route::get("/product/{product}", [HomeController::class, "productShow"])->name("frontend.product.show");

Route::resources([
    "products" => ProductController::class,
]);
