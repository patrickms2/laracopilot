<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'channel' => fake()->randomElement(["web","whatsapp","api","phone"]),
            'title' => fake()->sentence(4),
            'detected_intent' => fake()->word(),
            'assigned_agent' => fake()->randomElement(["orchestrator","villa","taxi","restaurant","winery","tour","store"]),
            'status' => fake()->randomElement(["open","waiting","resolved","archived"]),
            'last_message_at' => fake()->dateTime(),
        ];
    }
}
