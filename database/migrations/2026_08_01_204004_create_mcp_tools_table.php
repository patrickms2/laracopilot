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

        Schema::create('mcp_tools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mcp_server_id')->constrained();
            $table->string('name');
            $table->string('slug')->index();
            $table->text('description')->nullable();
            $table->enum('category', ["booking","catalog","payment","info","other"])->default('other');
            $table->text('input_schema')->nullable();
            $table->boolean('is_enabled')->default(true);
            $table->integer('call_count')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcp_tools');
    }
};
