<?php

namespace Database\Factories;

use App\Models\McpServer;
use Illuminate\Database\Eloquent\Factories\Factory;

class McpToolFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'mcp_server_id' => McpServer::factory(),
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'category' => fake()->randomElement(["booking","catalog","payment","info","other"]),
            'input_schema' => fake()->text(),
            'is_enabled' => fake()->boolean(),
            'call_count' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
