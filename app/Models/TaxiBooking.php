<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaxiBooking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'taxi_id',
        'user_id',
        'reference',
        'service_type',
        'guest_name',
        'guest_phone',
        'pickup_location',
        'dropoff_location',
        'pickup_at',
        'passengers',
        'duration_hours',
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
            'taxi_id' => 'integer',
            'user_id' => 'integer',
            'pickup_at' => 'datetime',
            'duration_hours' => 'decimal:1',
            'total_price' => 'decimal:2',
        ];
    }

    public function taxi(): BelongsTo
    {
        return $this->belongsTo(Taxi::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
