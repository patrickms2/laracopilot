<?php

namespace Database\Factories;

use App\Models\Itinerary;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItineraryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'itinerary_id' => Itinerary::factory(),
            'service_type' => fake()->randomElement(["villa","taxi","tour","winery","restaurant","product"]),
            'reference_id' => fake()->numberBetween(-10000, 10000),
            'title' => fake()->sentence(4),
            'scheduled_at' => fake()->dateTime(),
            'quantity' => fake()->numberBetween(-10000, 10000),
            'price' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["pending","confirmed","cancelled"]),
        ];
    }
}
