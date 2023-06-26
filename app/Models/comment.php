<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'email', 'comment', 'post_id'
    ];

    /*make a belong to many relationship with comment*/
    public function posts(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
