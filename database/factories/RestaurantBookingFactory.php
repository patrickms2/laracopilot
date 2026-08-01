<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'restaurant_id' => Restaurant::factory(),
            'user_id' => User::factory(),
            'reference' => fake()->word(),
            'guest_name' => fake()->word(),
            'guest_email' => fake()->word(),
            'guest_phone' => fake()->word(),
            'reserved_at' => fake()->dateTime(),
            'party_size' => fake()->numberBetween(-10000, 10000),
            'special_requests' => fake()->text(),
            'status' => fake()->randomElement(["pending","confirmed","seated","cancelled","no_show"]),
        ];
    }
}
