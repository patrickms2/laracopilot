<?php

namespace Database\Factories;

use App\Models\Villa;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillaRateFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'villa_id' => Villa::factory(),
            'label' => fake()->word(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'price_per_night' => fake()->randomFloat(2, 0, 999999.99),
            'min_nights' => fake()->numberBetween(-10000, 10000),
            'extra_guest_fee' => fake()->randomFloat(2, 0, 999999.99),
        ];
    }
}
