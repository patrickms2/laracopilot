<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Winery;
use Illuminate\Database\Eloquent\Factories\Factory;

class WineryVisitFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'winery_id' => Winery::factory(),
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'guest_name' => fake()->word(),
            'guest_email' => fake()->word(),
            'guest_phone' => fake()->word(),
            'visit_date' => fake()->date(),
            'visit_time' => fake()->word(),
            'participants' => fake()->numberBetween(-10000, 10000),
            'total_price' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["pending","confirmed","completed","cancelled"]),
            'payment_status' => fake()->randomElement(["unpaid","paid","refunded"]),
            'notes' => fake()->text(),
        ];
    }
}
