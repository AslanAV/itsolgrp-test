<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessComment;
use App\Listeners\SendCommentNotification;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'article_id' => 'required|numeric|exists:App\Models\Article,id',
            'subject' => 'required|max:255',
            'body' => 'required',
        ]);

        ProcessComment::dispatchAfterResponse($validated);

        return response()->json(['message' => 'Комментарий добавлен.', $validated], 200);
    }
}
