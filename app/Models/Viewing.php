<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;

class Viewing extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "phone",
        "email",
        "date",
        "time",
        "msg",
        "status",
        "property_id",
    ];

    public function property(): HasOne
    {
        return $this->hasOne(Property::class);
    }
}
