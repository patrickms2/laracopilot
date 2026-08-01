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

        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('category', ["boat","taxi","winery","hiking","market"])->default('boat');
            $table->text('description')->nullable();
            $table->decimal('duration_hours', 4, 1)->default(2);
            $table->decimal('price_per_person', 8, 2);
            $table->integer('min_participants')->default(1);
            $table->integer('max_participants')->default(20);
            $table->string('meeting_point')->nullable();
            $table->text('includes')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ["published","draft","archived"])->default('draft');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
