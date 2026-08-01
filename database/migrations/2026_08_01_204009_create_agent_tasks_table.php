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

        Schema::create('agent_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->nullable()->constrained();
            $table->foreignId('mcp_server_id')->nullable()->constrained();
            $table->enum('agent_type', ["orchestrator","villa","taxi","restaurant","winery","tour","store"])->default('orchestrator');
            $table->string('tool_name')->index();
            $table->enum('status', ["queued","running","completed","failed"])->default('queued');
            $table->text('input_payload')->nullable();
            $table->text('output_payload')->nullable();
            $table->text('error_message')->nullable();
            $table->dateTime('started_at')->nullable();
            $table->dateTime('completed_at')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_tasks');
    }
};
