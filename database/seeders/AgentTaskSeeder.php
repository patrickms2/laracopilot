<?php

namespace Database\Seeders;

use App\Models\AgentTask;
use Illuminate\Database\Seeder;

class AgentTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgentTask::factory()->count(5)->create();
    }
}
