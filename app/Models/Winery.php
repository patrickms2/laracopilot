<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Winery extends Model
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
        'region',
        'address',
        'description',
        'phone',
        'visit_price',
        'tasting_included',
        'capacity_per_visit',
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
            'visit_price' => 'decimal:2',
            'tasting_included' => 'boolean',
        ];
    }

    public function wineryVisits(): HasMany
    {
        return $this->hasMany(WineryVisit::class);
    }
}
