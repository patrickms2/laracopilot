<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class McpTool extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mcp_server_id',
        'name',
        'slug',
        'description',
        'category',
        'input_schema',
        'is_enabled',
        'call_count',
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
            'mcp_server_id' => 'integer',
            'is_enabled' => 'boolean',
        ];
    }

    public function mcpServer(): BelongsTo
    {
        return $this->belongsTo(McpServer::class);
    }
}
