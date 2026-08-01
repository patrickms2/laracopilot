<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'cuisine_type' => fake()->word(),
            'location' => fake()->word(),
            'description' => fake()->text(),
            'phone' => fake()->phoneNumber(),
            'capacity' => fake()->numberBetween(-10000, 10000),
            'opening_time' => fake()->word(),
            'closing_time' => fake()->word(),
            'price_range' => fake()->randomElement(["budget","mid","premium"]),
            'image' => fake()->word(),
            'status' => fake()->randomElement(["active","inactive"]),
        ];
    }
}
