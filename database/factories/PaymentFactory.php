<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'payable_type' => fake()->randomElement(["villa_booking","taxi_booking","tour_booking","winery_visit","restaurant_booking","order","itinerary"]),
            'payable_id' => fake()->numberBetween(-10000, 10000),
            'amount' => fake()->randomFloat(2, 0, 99999999.99),
            'currency' => fake()->randomElement(["EUR","USD","GBP"]),
            'method' => fake()->randomElement(["card","transfer","cash","paypal"]),
            'status' => fake()->randomElement(["pending","completed","failed","refunded"]),
            'transaction_id' => fake()->word(),
            'paid_at' => fake()->dateTime(),
            'notes' => fake()->text(),
        ];
    }
}
