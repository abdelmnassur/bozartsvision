<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Model
{
    protected $fillable = [
        'user_id',
    ];
    use HasFactory;

    public function user(): BelongsTo {
        $this->belongsTo(User::class, 'user_id');
    }
}
