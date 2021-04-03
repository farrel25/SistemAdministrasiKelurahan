<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Article;
use App\ArticleCategory;
use App\ArticleTag;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceArticleContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $articles = Article::with('category')->where('user_id', Auth::user()->id)->paginate(15);
        return view('dashboard.layanan.kontributor.kontributor', compact('articles'));
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
        return view('dashboard.layanan.kontributor.kontributor-tambah', compact('categories', 'tags'));
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
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'thumbnail' => 'required|image|max:3000',
            'body' => 'required|string',
            'document' => 'file|max:5000',
            'tags' => 'required|array',
        ]);

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

        $attr['user_id'] = $userId;
        $attr['slug'] = Str::slug($attr['title']);
        $attr['thumbnail'] = $thumbnailUrl;
        $attr['enabled'] = 0;
        $attr['commentable'] = 1;
        $attr['document'] = $documentName;
        $attr['link_document'] = $documentUrl;

        $article = Article::create($attr);
        $article->tags()->attach($request->tags);

        Alert::success(' Berhasil ', 'kontribusi artikel anda berhasil dikirim');

        return redirect()->route('layanan.kontributor');
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
    public function edit(Article $article)
    {
        $categories = ArticleCategory::get();
        $tags = ArticleTag::get();
        $tagCheck = DB::table('article_article_tag')->where('article_id', $article->id)->pluck('tag_id')->toArray();

        return view('dashboard.layanan.kontributor.kontributor-edit', compact('article', 'categories', 'tags', 'tagCheck'));
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
        $attr = $request->validate([
            'category_id' => 'required|numeric',
            'title' => 'required|string',
            'thumbnail' => 'image|max:3000',
            'body' => 'required|string',
            'tags' => 'required|array',
            'document' => 'file|max:5000',
        ]);


        $userId = Auth::user()->id;

        $thumbnailUrl = null;
        $documentUrl = null;
        $documentName = null;

        // cek apakah thumbnail sudah di inputkan
        if ($request->hasFile('thumbnail')) {
            $thumbnailSize = $request->file('thumbnail')->getSize();
            // cek ukuran thumbnail yg diupload
            if ($thumbnailSize <= 3000000) {
                // cek apakah ada thumbnail lama
                if ($article->thumbnail) {
                    // hapus thumbnail lama
                    Storage::delete($article->thumbnail);
                }
                // ambil file thumbnail
                $thumbnail = $request->file('thumbnail');
                // rename file thumbnail
                $originalName = explode('.', $thumbnail->getClientOriginalName());
                $thumbnailName = $originalName[0] . time() . '.' . $thumbnail->extension();
                // menentukan lokasi penyimpanan thumbnail
                $thumbnailUrl = $thumbnail->storeAs("images/thumbnail", "{$thumbnailName}");
            } else {
                // jika thumbnail yg diupload lebih dari 3MB, simpan yg lama
                $thumbnailUrl = $article->thumbnail;
            }
        } else {
            // jika thumbnail tidak diupdate, simpan yg lama
            $thumbnailUrl = $article->thumbnail;
        }

        // cek apakah document sudah di inputkan
        if ($request->hasFile('document')) {
            // ambil ukuran document
            $documentSize = $request->file('document')->getSize();
            // cek ukuran document yg diupload
            if ($documentSize <= 5000000) {
                // cek apakah ada document lama
                if ($article->link_document) {
                    // hapus document lama
                    Storage::delete($article->link_document);
                }
                // ambil file document
                $document = $request->file('document');
                // rename file document
                $originalName = explode('.', $document->getClientOriginalName());
                $documentName = $originalName[0] . time() . '.' .  $document->extension();
                // menentukan lokasi penyimpanan document
                $documentUrl = $document->storeAs("document/article_document", "{$documentName}");
            } else {
                // jika document yg diupload lebih dari 5MB, simpan yg lama
                $documentName = $article->document;
                $documentUrl = $article->link_document;
            }
        } else {
            // jika document tidak diupdate, simpan yg lama
            $documentName = $article->document;
            $documentUrl = $article->link_document;
        }


        $attr['user_id'] = $userId;
        $attr['slug'] = Str::slug($attr['title']);
        $attr['thumbnail'] = $thumbnailUrl;
        $attr['document'] = $documentName;
        $attr['link_document'] = $documentUrl;

        $article->update($attr);
        $article->tags()->sync($request->tags);

        Alert::success(' Berhasil ', 'Artikel berhasil Diperbarui');

        return redirect()->route('layanan.kontributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // $letterSubmission->delete();
        // Alert::success('Berhasil', 'Data pengajuan surat berhasil Ddhapus');
        // return redirect()->route('manajemen-surat.pengajuan-surat');
    }
}
