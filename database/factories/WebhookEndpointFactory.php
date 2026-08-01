<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WebhookEndpointFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'url' => fake()->url(),
            'agent_type' => fake()->randomElement(["orchestrator","villa","taxi","restaurant","winery","tour","store"]),
            'event_types' => fake()->text(),
            'secret' => fake()->word(),
            'is_active' => fake()->boolean(),
            'last_triggered_at' => fake()->dateTime(),
        ];
    }
}
