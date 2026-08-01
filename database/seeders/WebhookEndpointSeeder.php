<?php

namespace Database\Seeders;

use App\Models\WebhookEndpoint;
use Illuminate\Database\Seeder;

class WebhookEndpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebhookEndpoint::factory()->count(5)->create();
    }
}
