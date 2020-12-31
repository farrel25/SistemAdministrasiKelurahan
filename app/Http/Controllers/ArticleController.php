<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $all_articles = Article::get();
        $articles = Article::orderby('updated_at', 'desc')->paginate(6);
        $count = Article::all()->count();
        $article_comments = ArticleComment::take(5)->latest()->get();

        return view('visitors.artikel.index', compact('all_articles', 'count', 'articles', 'article_comments'));
    }

    public function show(Article $article)
    {
        $all_articles = Article::get();
        $count = $all_articles->count();
        $article_comments = ArticleComment::take(5)->latest()->get();
        $countComments = $article->comments->count();

        return view('visitors.artikel.view-artikel', compact('all_articles', 'article', 'count', 'article_comments', 'countComments'));
    }
}
