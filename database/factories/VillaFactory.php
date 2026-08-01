<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VillaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'location' => fake()->word(),
            'address' => fake()->word(),
            'description' => fake()->text(),
            'bedrooms' => fake()->numberBetween(-10000, 10000),
            'bathrooms' => fake()->numberBetween(-10000, 10000),
            'max_guests' => fake()->numberBetween(-10000, 10000),
            'base_price_per_night' => fake()->randomFloat(2, 0, 999999.99),
            'cleaning_fee' => fake()->randomFloat(2, 0, 999999.99),
            'amenities' => fake()->text(),
            'main_image' => fake()->word(),
            'status' => fake()->randomElement(["published","draft","maintenance"]),
        ];
    }
}
