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

        Schema::create('villa_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villa_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('reference')->unique();
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone')->nullable();
            $table->date('check_in')->index();
            $table->date('check_out');
            $table->integer('guests')->default(1);
            $table->integer('nights')->default(1);
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ["pending","confirmed","cancelled","completed"])->default('pending');
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
        Schema::dropIfExists('villa_bookings');
    }
};
