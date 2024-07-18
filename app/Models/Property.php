<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'cat',
        'type',
        'price',
        'locat',
        'map',
        'lice',
        'desc',
        'status',
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

    public function viewing(): HasOne
    {
        return $this->hasOne(Viewing::class);
    }

    public function registration(): HasOne {
        return $this->hasOne(Registration::class);  
    }
}
