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

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
