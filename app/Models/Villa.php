<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Villa extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'location',
        'address',
        'description',
        'bedrooms',
        'bathrooms',
        'max_guests',
        'base_price_per_night',
        'cleaning_fee',
        'amenities',
        'main_image',
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
            'base_price_per_night' => 'decimal:2',
            'cleaning_fee' => 'decimal:2',
        ];
    }

    public function villaRates(): HasMany
    {
        return $this->hasMany(VillaRate::class);
    }

    public function villaBookings(): HasMany
    {
        return $this->hasMany(VillaBooking::class);
    }
}
