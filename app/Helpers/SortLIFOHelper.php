<?php

namespace App\Helpers;

class SortLIFOHelper
{
    public static function sort($comments)
    {
        usort($comments, function ($comment1, $comment2) {
            return $comment1['created_at'] < $comment2['created_at'];
        });
        return $comments;
    }
}
