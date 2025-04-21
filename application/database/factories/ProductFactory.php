<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        $price = $this->faker->randomFloat(2, 0, 10);
        $sku = str_pad(rand(0, pow(10, 9)-1), 10, '0', STR_PAD_LEFT) . '-' . env('STORE_ID', 'UNK') . '-' . Product::count();

        return [
            'name' => $this->faker->name(),
            'sku' => $sku,
            'description' => $this->faker->text(),
            'selling_price' => $price,
            'vendor_price' => 1.25 * $price,
            'in_stock' => rand(0, 100),
            'category_id' => rand(1, Category::count()),
            'brand_id' => null,
            'vendor_id' => null,
            'image_collection_id' => null,
            'status' => array_rand(['active', 'inactive', 'discontinued']),
            'added_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
