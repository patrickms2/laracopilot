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

        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('conversation_id')->nullable()->constrained();
            $table->string('reference')->unique();
            $table->string('title');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('total', 10, 2)->default(0);
            $table->enum('status', ["draft","confirmed","paid","cancelled"])->default('draft');
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
        Schema::dropIfExists('itineraries');
    }
};
