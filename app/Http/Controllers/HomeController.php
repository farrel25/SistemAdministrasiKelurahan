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

        return view('visitors.beranda.index',  ['all_articles' => Article::get(), 'count' => Article::all()->count(),'articles' => Article::orderby('created_at', 'desc')->paginate(6), 'article_comments' => ArticleComment::get()]);
    }
}
