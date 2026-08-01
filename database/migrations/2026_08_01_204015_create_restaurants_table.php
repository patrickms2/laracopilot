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

        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('cuisine_type')->index();
            $table->string('location');
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->integer('capacity')->default(40);
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->enum('price_range', ["budget","mid","premium"])->default('mid');
            $table->string('image')->nullable();
            $table->enum('status', ["active","inactive"])->default('active');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
