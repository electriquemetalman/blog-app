<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'paragraph1', 'paragraph2', 'paragraph3', 'paragraph4'
    ];

    /*make a one to many relationship with comment*/

    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }
}
