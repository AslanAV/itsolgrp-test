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
//        $bodyRequest = file_get_contents('php://input');
//        $body = json_decode($bodyRequest, true, 512, JSON_THROW_ON_ERROR);
//        $myparam=$_POST;

//        return response()->json(['message' => 'success', 'likes' => $article->likes], 200);
        return response()->json($myparam, 200);
    }
}
