<?php

namespace Database\Seeders;

use App\Models\Winery;
use Illuminate\Database\Seeder;

class WinerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Winery::factory()->count(5)->create();
    }
}
