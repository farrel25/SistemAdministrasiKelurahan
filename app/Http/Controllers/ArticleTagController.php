<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use App\ArticleTag;
use App\ArticleCategory;
use Illuminate\Support\Facades\Auth;
use Alert;

class ArticleTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.manajemen_artikel.tag.tag'/*, compact('articles')*/);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleTag $tag)
    {
        $articles = $tag->articles()->latest()->paginate(6);
        // dd($articles);
        $count = $articles->count();
        $article_comments = ArticleComment::take(5)->latest()->get();

        return view('visitors.artikel.index', compact('articles', 'tag', 'count', 'article_comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleTag $articleTag)
    {
        return view('dashboard.manajemen_artikel.tag.tag-edit'/*, compact('article', 'categories', 'tags', 'tagCheck')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleTag $articleTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleTag  $articleTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleTag $articleTag)
    {
        //
    }
}