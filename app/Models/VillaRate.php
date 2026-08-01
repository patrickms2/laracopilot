<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VillaRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'villa_id',
        'label',
        'start_date',
        'end_date',
        'price_per_night',
        'min_nights',
        'extra_guest_fee',
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
            'start_date' => 'date',
            'end_date' => 'date',
            'price_per_night' => 'decimal:2',
            'extra_guest_fee' => 'decimal:2',
        ];
    }

    public function villa(): BelongsTo
    {
        return $this->belongsTo(Villa::class);
    }
}
