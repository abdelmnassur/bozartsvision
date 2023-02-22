<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = [
        'artiste_id',
        'titre',
        'description',
        'date_creation',
        'categorie_id',
        'status',
        'appreciation',
    ];
    use HasFactory;
}
