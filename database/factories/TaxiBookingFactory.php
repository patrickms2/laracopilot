<?php

namespace Database\Factories;

use App\Models\Taxi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxiBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'taxi_id' => Taxi::factory(),
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'service_type' => fake()->randomElement(["transfer","airport","tour"]),
            'guest_name' => fake()->word(),
            'guest_phone' => fake()->word(),
            'pickup_location' => fake()->word(),
            'dropoff_location' => fake()->word(),
            'pickup_at' => fake()->dateTime(),
            'passengers' => fake()->numberBetween(-10000, 10000),
            'duration_hours' => fake()->randomFloat(1, 0, 999.9),
            'total_price' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["pending","confirmed","in_progress","completed","cancelled"]),
            'payment_status' => fake()->randomElement(["unpaid","paid","refunded"]),
            'notes' => fake()->text(),
        ];
    }
}
