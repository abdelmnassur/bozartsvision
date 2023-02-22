<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'user_id',
        'oeuvre_id',
        'commentaire',
    ];
    use HasFactory;
}
