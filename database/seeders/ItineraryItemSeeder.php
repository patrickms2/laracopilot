<?php

namespace Database\Seeders;

use App\Models\ItineraryItem;
use Illuminate\Database\Seeder;

class ItineraryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItineraryItem::factory()->count(5)->create();
    }
}
