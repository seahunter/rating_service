<?php

namespace App\Services;

use App\Models\Post;

class RatingService
{
    public function calculateAverageRating(Post $post)
    {
        $totalVoteCount = $post->ratings()->count();
        $summary = $post->ratings()->sum('rating');

        return $summary / $totalVoteCount;
    }
}
