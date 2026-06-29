<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        File::cleanDirectory(storage_path("app/public/uploads/products"));
        File::copyDirectory(public_path("assets/images/products"), storage_path("app/public/uploads/products"));

        Product::factory(92)->create();
    }
}
