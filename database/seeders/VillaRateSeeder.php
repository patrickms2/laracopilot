<?php

namespace Database\Seeders;

use App\Models\VillaRate;
use Illuminate\Database\Seeder;

class VillaRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VillaRate::factory()->count(5)->create();
    }
}
