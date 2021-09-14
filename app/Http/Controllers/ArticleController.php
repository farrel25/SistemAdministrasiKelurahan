<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = Article::with('user')->where('enabled', 1)->orderby('updated_at', 'desc')->paginate(6);

        // $articles = Article::where('enabled', 1);
        // if(request('search')) {
        //     $articles
        //         ->where('title', 'like', '%'.request('search').'%')
        //         ->orWhere('body', 'like', '%'.request('search').'%');
        // }
        // $articles = $articles->orderby('updated_at', 'desc')->paginate(6);

        $articles = Article::filter(request(['search', 'category']))
            ->where('enabled', 1)
            ->orderby('updated_at', 'desc')
            ->paginate(6);

        return view('visitors.artikel.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // $all_articles = Article::get();
        // $count = $all_articles->count();
        // $article_comments = ArticleComment::take(5)->latest()->get();
        $countComments = $article->comments->count();

        // dd($article->read_count);
        $read_count = $article->read_count + 1;
        $article->update(['read_count' => $read_count]);

        return view('visitors.artikel.view-artikel', compact('article', 'countComments'));
    }
}
