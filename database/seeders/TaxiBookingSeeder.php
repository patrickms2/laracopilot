<?php

namespace Database\Seeders;

use App\Models\TaxiBooking;
use Illuminate\Database\Seeder;

class TaxiBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaxiBooking::factory()->count(5)->create();
    }
}
