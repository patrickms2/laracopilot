<?php

namespace Database\Seeders;

use App\Models\Taxi;
use Illuminate\Database\Seeder;

class TaxiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Taxi::factory()->count(5)->create();
    }
}
