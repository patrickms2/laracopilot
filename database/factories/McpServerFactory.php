<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class McpServerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'agent_type' => fake()->randomElement(["orchestrator","villa","taxi","restaurant","winery","tour","store"]),
            'base_url' => fake()->word(),
            'transport' => fake()->randomElement(["http","sse","websocket"]),
            'auth_token' => fake()->word(),
            'description' => fake()->text(),
            'status' => fake()->randomElement(["online","offline","error"]),
            'last_heartbeat_at' => fake()->dateTime(),
        ];
    }
}
