<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VillaBooking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'villa_id',
        'user_id',
        'reference',
        'guest_name',
        'guest_email',
        'guest_phone',
        'check_in',
        'check_out',
        'guests',
        'nights',
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
            'villa_id' => 'integer',
            'user_id' => 'integer',
            'check_in' => 'date',
            'check_out' => 'date',
            'total_price' => 'decimal:2',
        ];
    }

    public function villa(): BelongsTo
    {
        return $this->belongsTo(Villa::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
