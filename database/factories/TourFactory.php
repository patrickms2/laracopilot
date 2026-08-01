<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'category' => fake()->randomElement(["boat","taxi","winery","hiking","market"]),
            'description' => fake()->text(),
            'duration_hours' => fake()->randomFloat(1, 0, 999.9),
            'price_per_person' => fake()->randomFloat(2, 0, 999999.99),
            'min_participants' => fake()->numberBetween(-10000, 10000),
            'max_participants' => fake()->numberBetween(-10000, 10000),
            'meeting_point' => fake()->word(),
            'includes' => fake()->text(),
            'image' => fake()->word(),
            'status' => fake()->randomElement(["published","draft","archived"]),
        ];
    }
}
