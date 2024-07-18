<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "img",
        "phone",
        "email",
        "msg",
        "status",
        "property_id",
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
