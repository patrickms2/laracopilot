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

        Schema::create('winery_visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('winery_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('reference')->unique();
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone')->nullable();
            $table->date('visit_date')->index();
            $table->string('visit_time');
            $table->integer('participants')->default(2);
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ["pending","confirmed","completed","cancelled"])->default('pending');
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
        Schema::dropIfExists('winery_visits');
    }
};
