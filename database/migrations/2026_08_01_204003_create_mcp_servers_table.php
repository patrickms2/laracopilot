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
        Schema::create('mcp_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('agent_type', ["orchestrator","villa","taxi","restaurant","winery","tour","store"])->default('orchestrator');
            $table->string('base_url');
            $table->enum('transport', ["http","sse","websocket"])->default('http');
            $table->string('auth_token')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ["online","offline","error"])->default('offline');
            $table->dateTime('last_heartbeat_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcp_servers');
    }
};
