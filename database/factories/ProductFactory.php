<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $adjectives = [
            'Premium',
            'Classic',
            'Modern',
            'Luxury',
            'Elegant',
            'Portable',
            'Handmade',
            'Vintage',
            'Eco',
            'Smart'
        ];

        $products = [
            'Leather Wallet',
            'Coffee Mug',
            'Wooden Bowl',
            'Hand Bag',
            'Camera',
            'Wrist Watch',
            'Backpack',
            'Table Lamp',
            'Notebook',
            'Phone Stand',
            'Ceramic Vase',
            'Scented Candle',
            'Cotton T-Shirt',
            'Bluetooth Speaker',
            'Desk Organizer'
        ];

        $name = $this->faker->randomElement($adjectives) . ' ' .
            $this->faker->randomElement($products);
        $currencies = ['$', '€', '৳', '£'];
        return [
            //
            "name" => $name,
            "slug" => Str::slug($name),
            "description" => $this->faker->paragraph,
            "image" => "product_" . $this->faker->numberBetween(1, count(File::files(public_path("assets/images/products")))) . ".jpg",
            "price" => $this->faker->randomFloat(2, 100, 1000),
            "currency" => $this->faker->randomElement($currencies),
            "stock" => $this->faker->numberBetween(0, 200),
        ];
    }
}
