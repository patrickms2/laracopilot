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

        Schema::create('villa_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villa_id')->constrained();
            $table->string('label');
            $table->date('start_date')->index();
            $table->date('end_date');
            $table->decimal('price_per_night', 8, 2);
            $table->integer('min_nights')->default(1);
            $table->decimal('extra_guest_fee', 8, 2)->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villa_rates');
    }
};
