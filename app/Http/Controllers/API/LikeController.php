<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'article_id' => 'required|numeric|exists:App\Models\Article,id',
        ]);

        $article = Article::find($validated['article_id']);
        $article->increment('likes');
        $article->save();

        return response()->json(['message' => 'Реакция добавлена!', 'likes' => $article->likes], 200);
    }
}
