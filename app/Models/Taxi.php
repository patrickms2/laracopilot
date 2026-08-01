<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Taxi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driver_name',
        'vehicle_model',
        'plate',
        'capacity',
        'phone',
        'zone',
        'base_fare',
        'price_per_km',
        'is_available',
        'photo',
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
            'base_fare' => 'decimal:2',
            'price_per_km' => 'decimal:2',
            'is_available' => 'boolean',
        ];
    }

    public function taxiBookings(): HasMany
    {
        return $this->hasMany(TaxiBooking::class);
    }
}
