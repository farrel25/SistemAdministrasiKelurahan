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
        $articles = Article::orderby('updated_at', 'desc')->paginate(3);

        return view('visitors.beranda.index', ['count' => Article::all()->count(), 'articles' => $articles, 'article_comments' => ArticleComment::take(5)->latest()->get()]);
    }
}
