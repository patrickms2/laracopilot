<?php

namespace Database\Seeders;

use App\Models\McpServer;
use Illuminate\Database\Seeder;

class McpServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        McpServer::factory()->count(5)->create();
    }
}
