<?php

namespace Database\Seeders;

use App\Models\McpTool;
use Illuminate\Database\Seeder;

class McpToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        McpTool::factory()->count(5)->create();
    }
}
