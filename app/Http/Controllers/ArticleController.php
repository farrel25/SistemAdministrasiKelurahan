<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('visitors.artikel.index', ['articles' => Article::orderby('created_at', 'desc')->paginate(6)]);
    }
    public function viewartikel()
    {
        return view('visitors.artikel.view-artikel');
    }
}