<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WineryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'region' => fake()->word(),
            'address' => fake()->word(),
            'description' => fake()->text(),
            'phone' => fake()->phoneNumber(),
            'visit_price' => fake()->randomFloat(2, 0, 999999.99),
            'tasting_included' => fake()->boolean(),
            'capacity_per_visit' => fake()->numberBetween(-10000, 10000),
            'image' => fake()->word(),
            'status' => fake()->randomElement(["active","inactive"]),
        ];
    }
}
