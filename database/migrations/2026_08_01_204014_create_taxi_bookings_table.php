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

        Schema::create('taxi_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('taxi_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('reference')->unique();
            $table->enum('service_type', ["transfer","airport","tour"])->default('transfer');
            $table->string('guest_name');
            $table->string('guest_phone')->nullable();
            $table->string('pickup_location');
            $table->string('dropoff_location')->nullable();
            $table->dateTime('pickup_at')->index();
            $table->integer('passengers')->default(1);
            $table->decimal('duration_hours', 4, 1)->nullable();
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ["pending","confirmed","in_progress","completed","cancelled"])->default('pending');
            $table->enum('payment_status', ["unpaid","paid","refunded"])->default('unpaid');
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
        Schema::dropIfExists('taxi_bookings');
    }
};
