<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaxiFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'driver_name' => fake()->word(),
            'vehicle_model' => fake()->word(),
            'plate' => fake()->word(),
            'capacity' => fake()->numberBetween(-10000, 10000),
            'phone' => fake()->phoneNumber(),
            'zone' => fake()->word(),
            'base_fare' => fake()->randomFloat(2, 0, 999999.99),
            'price_per_km' => fake()->randomFloat(2, 0, 999999.99),
            'is_available' => fake()->boolean(),
            'photo' => fake()->word(),
        ];
    }
}
