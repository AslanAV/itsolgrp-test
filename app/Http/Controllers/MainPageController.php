<?php

namespace App\Http\Controllers;

use App\Models\Article;

class MainPageController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->limit(6)->get();
        return view('welcome', compact('articles'));
    }
}
