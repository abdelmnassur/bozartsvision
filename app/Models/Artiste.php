<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = [
        'user_id',
        'logo',
        'slogan',
    ];
    use HasFactory;
}
