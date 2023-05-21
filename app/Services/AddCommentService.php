<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class AddCommentService
{
    public function addComment(array $validated): void
    {
        $article = Article::find($validated['article_id']);
        $comment = Comment::create([
            'subject' => $validated['subject'],
            'body' => $validated['body'],
            'article_id' => $validated['article_id']
        ]);

        $article->comments()->lockForUpdate()->save($comment);
    }
}
