<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'customer_name' => fake()->word(),
            'customer_email' => fake()->word(),
            'customer_phone' => fake()->word(),
            'shipping_address' => fake()->text(),
            'subtotal' => fake()->randomFloat(2, 0, 99999999.99),
            'tax_amount' => fake()->randomFloat(2, 0, 99999999.99),
            'total' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["pending","processing","shipped","delivered","cancelled"]),
            'payment_status' => fake()->randomElement(["unpaid","paid","refunded"]),
            'notes' => fake()->text(),
        ];
    }
}
