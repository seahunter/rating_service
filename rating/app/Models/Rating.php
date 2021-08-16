<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $fillable = ['post_id', 'rating'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
