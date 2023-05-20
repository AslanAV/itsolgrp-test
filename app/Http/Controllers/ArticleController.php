<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ArticleController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        $tags = Tag::all();
        return view('articles.index', compact('articles', 'tags'));
    }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
