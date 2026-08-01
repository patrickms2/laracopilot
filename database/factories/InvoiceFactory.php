<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'payment_id' => Payment::factory(),
            'user_id' => User::factory(),
            'invoice_number' => fake()->word(),
            'customer_name' => fake()->word(),
            'customer_tax_id' => fake()->word(),
            'billing_address' => fake()->text(),
            'issue_date' => fake()->date(),
            'due_date' => fake()->date(),
            'subtotal' => fake()->randomFloat(2, 0, 99999999.99),
            'tax_amount' => fake()->randomFloat(2, 0, 99999999.99),
            'total' => fake()->randomFloat(2, 0, 99999999.99),
            'status' => fake()->randomElement(["draft","issued","paid","cancelled"]),
            'pdf_path' => fake()->word(),
            'notes' => fake()->text(),
        ];
    }
}
