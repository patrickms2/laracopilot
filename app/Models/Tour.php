<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
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
        'category',
        'description',
        'duration_hours',
        'price_per_person',
        'min_participants',
        'max_participants',
        'meeting_point',
        'includes',
        'image',
        'status',
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
            'duration_hours' => 'decimal:1',
            'price_per_person' => 'decimal:2',
        ];
    }

    public function tourBookings(): HasMany
    {
        return $this->hasMany(TourBooking::class);
    }
}
