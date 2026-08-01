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

        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('location')->index();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->integer('bedrooms')->default(1);
            $table->integer('bathrooms')->default(1);
            $table->integer('max_guests')->default(2);
            $table->decimal('base_price_per_night', 8, 2);
            $table->decimal('cleaning_fee', 8, 2)->default(0);
            $table->text('amenities')->nullable();
            $table->string('main_image')->nullable();
            $table->enum('status', ["published","draft","maintenance"])->default('draft');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
