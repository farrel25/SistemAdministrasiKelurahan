<?php

namespace App\Http\Controllers;

use  App\Article;
use  App\ArticleComment;
use App\ComplaintCategory;
use ComplaintCategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $all_articles = Article::get();
        $articles = Article::where('enabled', 1)->orderby('updated_at', 'desc')->paginate(6);
        // $count = $all_articles->count();
        $complaint_categories = ComplaintCategory::get();

        $user = null;
        $user_id = null;
        if(Auth::check()) {
            $user = Auth::user();
            $user_id = $user->id;
        }

        return view('visitors.beranda.index', compact(
            'articles',
            'complaint_categories',
            'user',
            'user_id'
        ));
    }
}
