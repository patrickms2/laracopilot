<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class McpServer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'agent_type',
        'base_url',
        'transport',
        'auth_token',
        'description',
        'status',
        'last_heartbeat_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'last_heartbeat_at' => 'datetime',
        ];
    }

    public function mcpTools(): HasMany
    {
        return $this->hasMany(McpTool::class);
    }

    public function agentTasks(): HasMany
    {
        return $this->hasMany(AgentTask::class);
    }
}
