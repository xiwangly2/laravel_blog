<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }
}
