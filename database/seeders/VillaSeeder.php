<?php

namespace Database\Seeders;

use App\Models\Villa;
use Illuminate\Database\Seeder;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Villa::factory()->count(5)->create();
    }
}
