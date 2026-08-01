<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\McpServer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'conversation_id' => Conversation::factory(),
            'mcp_server_id' => McpServer::factory(),
            'agent_type' => fake()->randomElement(["orchestrator","villa","taxi","restaurant","winery","tour","store"]),
            'tool_name' => fake()->word(),
            'status' => fake()->randomElement(["queued","running","completed","failed"]),
            'input_payload' => fake()->text(),
            'output_payload' => fake()->text(),
            'error_message' => fake()->text(),
            'started_at' => fake()->dateTime(),
            'completed_at' => fake()->dateTime(),
        ];
    }
}
