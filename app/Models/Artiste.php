<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artiste extends Model
{
    protected $fillable = [
        'user_id',
        'logo',
        'slogan',
    ];
    use HasFactory;

    public function user() {
        $this->belongsTo(User::class, 'user_id');
    }
}
