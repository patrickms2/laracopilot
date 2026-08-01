<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Villa;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillaBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'villa_id' => Villa::factory(),
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'guest_name' => fake()->word(),
            'guest_email' => fake()->word(),
            'guest_phone' => fake()->word(),
            'check_in' => fake()->date(),
            'check_out' => fake()->date(),
            'guests' => fake()->numberBetween(-10000, 10000),
            'nights' => fake()->numberBetween(-10000, 10000),
            'total_price' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["pending","confirmed","cancelled","completed"]),
            'payment_status' => fake()->randomElement(["unpaid","paid","refunded"]),
            'notes' => fake()->text(),
        ];
    }
}
