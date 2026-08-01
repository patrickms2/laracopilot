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

        Schema::create('taxis', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('vehicle_model');
            $table->string('plate')->unique();
            $table->integer('capacity')->default(4);
            $table->string('phone')->nullable();
            $table->string('zone')->nullable();
            $table->decimal('base_fare', 8, 2);
            $table->decimal('price_per_km', 8, 2);
            $table->boolean('is_available')->default(true);
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxis');
    }
};
