<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Alert;
use App\ArticleCategory;
use App\ArticleTag;
use Illuminate\Validation\Rule;

// use RealRashid\SweetAlert\Facades\Alert;

class ArticleDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('updated_at', 'desc')->paginate(10);

        return view('dashboard.manajemen_artikel.artikel.artikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategory::get();
        $tags = ArticleTag::get();
        return view('dashboard.manajemen_artikel.artikel.artikel-tambah', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;

        $thumbnailUrl = null;
        $documentUrl = null;
        $documentName = null;

        // cek apakah thumbnail sudah di inputkan
        if ($request->hasFile('thumbnail')) {
            $thumbnailSize = $request->file('thumbnail')->getSize();
            // cek ukuran thumbnail yg diupload
            if ($thumbnailSize <= 3000000) {
                // ambil file thumbnail
                $thumbnail = $request->file('thumbnail');
                // rename file thumbnail
                $originalName = explode('.', $thumbnail->getClientOriginalName());
                $thumbnailName = $originalName[0] . time() . '.' . $thumbnail->extension();
                // menentukan lokasi penyimpanan thumbnail
                $thumbnailUrl = $thumbnail->storeAs("images/thumbnail", "{$thumbnailName}");
            }
        }

        // cek apakah document sudah di inputkan
        if ($request->hasFile('document')) {
            // ambil ukuran document
            $documentSize = $request->file('document')->getSize();
            // cek ukuran document yg diupload
            if ($documentSize <= 5000000) {
                // ambil file document
                $document = $request->file('document');
                // rename file document
                $originalName = explode('.', $document->getClientOriginalName());
                $documentName = $originalName[0] . time() . '.' .  $document->extension();
                // menentukan lokasi penyimpanan document
                $documentUrl = $document->storeAs("document/article_document", "{$documentName}");
            }
        }

        $attr = $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'thumbnail' => 'required|image|max:3000',
            'body' => 'required|string',
            'document' => 'file|max:5000',
            'tags' => 'required|array',
        ]);

        $attr['user_id'] = $userId;
        $attr['slug'] = \Str::slug($attr['title']);
        $attr['thumbnail'] = $thumbnailUrl;
        $attr['enabled'] = 1;
        $attr['commentable'] = 1;
        $attr['document'] = $documentName;
        $attr['link_document'] = $documentUrl;

        $article = Article::create($attr);
        $article->tags()->attach($request->tags);

        Alert::success(' Berhasil ', 'Artikel berhasil Ditambahkan');

        return redirect()->route('manajemen-artikel.artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('dashboard.manajemen_artikel.artikel.artikel-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //     $attr = $request->validate([
        //         'type' => 'required|string|max:255',
        //         // 'validity_period' => 'required|numeric|min:1|max:31',
        //         // 'validity_period_unit' => 'required|alpha',
        //     ]);

        //     // $letterType->update($attr);
        //     // Alert::success(' Berhasil ', 'Jenis artikel berhasil Diperbarui');

        //     return redirect()->route('manajemen-artikel.jenis-artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();

        if ($article->thumbnail) {
            \Storage::delete($article->thumbnail);
        }

        if ($article->link_document) {
            \Storage::delete($article->link_document);
        }

        $article->delete();

        Alert::success(' Berhasil ', 'Artikel berhasil Dihapus');

        return redirect()->route('manajemen-artikel.artikel');
    }
}
