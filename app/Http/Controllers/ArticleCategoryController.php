<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ArticleCategory::get();
        //
        // $articles = Article::orderBy('updated_at', 'desc')->paginate(10);

        return view('dashboard.manajemen_artikel.kategori.kategori', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = ArticleCategory::get();
        // return view('dashboard.manajemen_artikel.kategori.kategori-tambah'/*, compact('categories')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'category' => 'required|string'
        ]);

        $attr['slug'] = Str::slug($attr['category']);
        $attr['enabled'] = 1;

        ArticleCategory::create($attr);

        Alert::success('Berhasil', 'Kategori artikel berhasil ditambahkan');
        return redirect()->route('manajemen-artikel.kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $category)
    {
        // $all_articles = Article::get();
        $articles = $category->articles()->with('user')->where('enabled', 1)->latest()->paginate(6);
        // dd($articles);
        // $count = $articles->count();
        // $article_comments = ArticleComment::take(5)->latest()->get();

        return view('visitors.artikel.index', compact('articles', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articleCategory)
    {
        return view('dashboard.manajemen_artikel.kategori.kategori-edit', compact('articleCategory'));
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
        $attr = $request->validate([
            'category' => 'required|string'
        ]);
        $attr['slug'] = Str::slug($attr['category']);

        $articleCategory->update($attr);

        Alert::success('Berhasil', 'Kategori artikel berhasil diperbarui');

        return redirect()->route('manajemen-artikel.kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();
        Alert::success('Berhasil', 'Kategori artikel berhasil dihapus');
        return redirect()->route('manajemen-artikel.kategori');
    }

    public function activation(Request $request, ArticleCategory $articleCategory)
    {
        $attr = $request->validate([
            'enabled' => 'required|boolean'
        ]);

        $articleCategory->update($attr);

        if ($request->enabled == 1) {
            Alert::success(' Berhasil ', 'Kategori artikel di aktifkan');
        } else {
            Alert::success(' Berhasil ', 'Kategori artikel di non-aktifkan');
        }

        return redirect()->route('manajemen-artikel.kategori');
    }
}
