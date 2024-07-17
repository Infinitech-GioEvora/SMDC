<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cat',
        'type',
        'price',
        'locat',
        'map',
        'lice',
        'desc',
    ];

    public function amenities(): HasMany
    {
        return $this->hasMany(Amenity::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function viewing(): BelongsTo
    {
        return $this->belongsTo(Viewing::class);
    }
}
