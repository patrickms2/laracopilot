<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('reference')->unique();
            $table->enum('payable_type', ["villa_booking","taxi_booking","tour_booking","winery_visit","restaurant_booking","order","itinerary"])->default('order');
            $table->integer('payable_id')->index();
            $table->decimal('amount', 10, 2);
            $table->enum('currency', ["EUR","USD","GBP"])->default('EUR');
            $table->enum('method', ["card","transfer","cash","paypal"])->default('card');
            $table->enum('status', ["pending","completed","failed","refunded"])->default('pending');
            $table->string('transaction_id')->nullable();
            $table->dateTime('paid_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
