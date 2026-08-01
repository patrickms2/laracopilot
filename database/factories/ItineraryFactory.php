<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItineraryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'conversation_id' => Conversation::factory(),
            'reference' => fake()->word(),
            'title' => fake()->sentence(4),
            'customer_name' => fake()->word(),
            'customer_email' => fake()->word(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'total' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["draft","confirmed","paid","cancelled"]),
            'notes' => fake()->text(),
        ];
    }
}
