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
        $articles = Article::orderby('updated_at', 'desc')->paginate(6);
        $count = Article::all()->count();
        $article_comments = ArticleComment::take(5)->latest()->get();
        $all_articles = Article::get();

        return view('visitors.artikel.index', compact('all_articles','count', 'articles', 'article_comments'));
    }

    public function show(Article $article)
    {
        $count = Article::all()->count();
        $article_comments = ArticleComment::take(5)->latest()->get();
        $countComments = ArticleComment::get()->count();
        $all_articles = Article::get();

        return view('visitors.artikel.view-artikel', compact('all_articles','article', 'count', 'article_comments', 'countComments'));
    }
}
