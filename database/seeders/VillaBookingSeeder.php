<?php

namespace Database\Seeders;

use App\Models\VillaBooking;
use Illuminate\Database\Seeder;

class VillaBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VillaBooking::factory()->count(5)->create();
    }
}
