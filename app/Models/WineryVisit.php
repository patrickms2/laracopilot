<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WineryVisit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'winery_id',
        'user_id',
        'reference',
        'guest_name',
        'guest_email',
        'guest_phone',
        'visit_date',
        'visit_time',
        'participants',
        'total_price',
        'status',
        'payment_status',
        'notes',
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
            'winery_id' => 'integer',
            'user_id' => 'integer',
            'visit_date' => 'date',
            'total_price' => 'decimal:2',
        ];
    }

    public function winery(): BelongsTo
    {
        return $this->belongsTo(Winery::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
