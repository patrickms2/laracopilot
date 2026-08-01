<?php

namespace Database\Seeders;

use App\Models\WineryVisit;
use Illuminate\Database\Seeder;

class WineryVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WineryVisit::factory()->count(5)->create();
    }
}
