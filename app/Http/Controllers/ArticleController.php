<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = null;
        $user_id = null;
        if(Auth::check()) {
            $user = Auth::user();
            $user_id = $user->id;
        }

        $article_comments = $article->comments()->latest()->get();
        $countComments = $article_comments->count();
        // dd($article_comments);

        $read_count = $article->read_count + 1;
        $article->update(['read_count' => $read_count]);

        return view('visitors.artikel.view-artikel', compact(
            'article',
            'article_comments',
            'countComments',
            'user',
            'user_id'
        ));
    }

    public function showHistoryAndVisionMission() {
        $article = Article::where('category_id', 1)->first();
        // dd($article);
        return view('visitors.profil_desa.sejarah-visi-misi', compact('article'));
    }

    public function showGovernmentStructure() {
        $article = Article::where('category_id', 2)->first();
        // dd($article);
        return view('visitors.profil_desa.struktur-pemerintahan', compact('article'));
    }
}
