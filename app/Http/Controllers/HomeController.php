<?php

namespace App\Http\Controllers;

use  App\Article;
use  App\ArticleComment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function beranda()
    {
        $all_articles = Article::get();
        $articles = Article::orderby('updated_at', 'desc')->paginate(6);
        $count = $all_articles->count();
        $article_comments = ArticleComment::get();

        return view('visitors.beranda.index', compact('all_articles', 'articles', 'count', 'article_comments'));
    }
}
