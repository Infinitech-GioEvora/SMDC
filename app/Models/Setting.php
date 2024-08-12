<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "logo",
        "desc",
        "fb",
        "insta",
        "email",
        "phone",
        "viber",
        "whatsapp",
        "disc",
    ];
}
