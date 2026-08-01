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

        Schema::create('wineries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('region')->index();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('visit_price', 8, 2);
            $table->boolean('tasting_included')->default(true);
            $table->integer('capacity_per_visit')->default(10);
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
        Schema::dropIfExists('wineries');
    }
};
