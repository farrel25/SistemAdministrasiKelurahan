<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Article;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $articles = Article::orderBy('updated_at', 'desc')->paginate(10);

        return view('dashboard.manajemen_artikel.kategori.kategori'/*, compact('articles')*/);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = ArticleCategory::get();
        // $tags = ArticleTag::get();
        return view('dashboard.manajemen_artikel.kategori.kategori-tambah'/*, compact('categories', 'tags')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $category)
    {
        $all_articles = Article::get();
        $articles = $category->articles()->latest()->paginate(6);
        // dd($articles);
        $count = $articles->count();
        $article_comments = ArticleComment::take(5)->latest()->get();

        return view('visitors.artikel.index', compact('all_articles', 'articles', 'category', 'count', 'article_comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articleCategory)
    {
        // $categories = ArticleCategory::get();
        // $tags = ArticleTag::get();
        // $tagCheck = \DB::table('article_article_tag')->where('article_id', $article->id)->pluck('tag_id')->toArray();

        return view('dashboard.manajemen_artikel.kategori.kategori-edit'/*, compact('article', 'categories', 'tags', 'tagCheck')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        //
    }
}
