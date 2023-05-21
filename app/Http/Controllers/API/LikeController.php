<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
//        $validated = $request->validate([
//            'article_id' => 'required|string|exists:App\Model\Article,id',
//        ]);

        $article = Article::findOrFail($request->article_id);
        $article->likes += 1;
        $article->save();

        return response()->json(['message' => 'success', 'likes' => $article->likes], 200);
    }
}
