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
        $comments = ArticleComment::paginate(10);
        // dd($comments[9]->article->title);
        return view('dashboard.manajemen_artikel.komentar.komentar', compact('comments'));
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
        $articleComment->delete();
        Alert::success('Berhasil', 'Komentar artikel berhasil dihapus');
        return redirect()->route('manajemen-artikel.komentar');
    }

    public function activation(Request $request, ArticleComment $articleComment)
    {
        $attr = $request->validate([
            'enabled' => 'required|boolean'
        ]);

        $articleComment->update($attr);

        if ($request->enabled == 1) {
            Alert::success(' Berhasil ', 'Komentar artikel di aktifkan');
        } else {
            Alert::success(' Berhasil ', 'Komentar artikel di non-aktifkan');
        }

        return redirect()->route('manajemen-artikel.komentar');
    }
}
