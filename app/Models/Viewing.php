<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Viewing extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

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

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
