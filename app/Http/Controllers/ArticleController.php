<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('visitors.artikel.index', ['count' => Article::all()->count(),'articles' => Article::orderby('created_at', 'desc')->paginate(6), 'article_comments' => ArticleComment::take(5)->latest()->get()]);
    }
    public function viewartikel(Article $article)
    // public function viewartikel()
    {
        $article_target = $article;
        $count = Article::all()->count();
        $article_comments = ArticleComment::take(5)->latest()->get();
        return view('visitors.artikel.view-artikel', compact(['count', 'article_target', 'article_comments']));
        // return view('visitors.artikel.view-artikel');
    }
}
