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

        Schema::create('webhook_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('webhook_endpoint_id')->constrained();
            $table->string('event_name')->index();
            $table->text('payload')->nullable();
            $table->integer('response_code')->nullable();
            $table->text('response_body')->nullable();
            $table->enum('status', ["pending","delivered","failed"])->default('pending');
            $table->integer('attempts')->default(0);
            $table->dateTime('delivered_at')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhook_deliveries');
    }
};
