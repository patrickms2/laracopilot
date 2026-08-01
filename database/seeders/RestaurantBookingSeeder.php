<?php

namespace Database\Seeders;

use App\Models\RestaurantBooking;
use Illuminate\Database\Seeder;

class RestaurantBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RestaurantBooking::factory()->count(5)->create();
    }
}
