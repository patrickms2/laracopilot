<?php

namespace Database\Factories;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'conversation_id' => Conversation::factory(),
            'sender' => fake()->randomElement(["user","orchestrator","agent","system"]),
            'agent_name' => fake()->word(),
            'body' => fake()->text(),
            'payload' => fake()->text(),
            'read_at' => fake()->dateTime(),
        ];
    }
}
