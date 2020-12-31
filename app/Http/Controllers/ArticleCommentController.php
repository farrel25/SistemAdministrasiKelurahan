<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use Illuminate\Http\Request;
use App\ArticleCategory;
use Illuminate\Support\Facades\Auth;
use Alert;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.manajemen_artikel.komentar.komentar'/*, compact('articles')*/);
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
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleComment $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleComment $articleComment)
    {
        return view('dashboard.manajemen_artikel.komentar.komentar-edit'/*, compact('article', 'categories', 'tags', 'tagCheck')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleComment  $articleComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleComment $articleComment)
    {
        //
    }
}