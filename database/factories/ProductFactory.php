<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_category_id' => ProductCategory::factory(),
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'sku' => fake()->word(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 999999.99),
            'stock' => fake()->numberBetween(-10000, 10000),
            'unit' => fake()->randomElement(["unit","bottle","box","kg","litre"]),
            'origin' => fake()->word(),
            'image' => fake()->word(),
            'is_featured' => fake()->boolean(),
            'status' => fake()->randomElement(["active","draft","archived"]),
        ];
    }
}
