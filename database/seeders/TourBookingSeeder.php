<?php

namespace Database\Seeders;

use App\Models\TourBooking;
use Illuminate\Database\Seeder;

class TourBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TourBooking::factory()->count(5)->create();
    }
}
