<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        $tags = Tag::all();
        return view('articles.index', compact('articles', 'tags'));
    }
    public function show(Article $article)
    {
        return view('articles.show');
    }
}
