<?php

namespace Database\Factories;

use App\Models\WebhookEndpoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebhookDeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'webhook_endpoint_id' => WebhookEndpoint::factory(),
            'event_name' => fake()->word(),
            'payload' => fake()->text(),
            'response_code' => fake()->numberBetween(-10000, 10000),
            'response_body' => fake()->text(),
            'status' => fake()->randomElement(["pending","delivered","failed"]),
            'attempts' => fake()->numberBetween(-10000, 10000),
            'delivered_at' => fake()->dateTime(),
        ];
    }
}
