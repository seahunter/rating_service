<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public $fillable = ['post_id', 'post_title'];

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }
}
