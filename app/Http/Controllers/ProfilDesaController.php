<?php

namespace App\Http\Controllers;

use App\sejarahvisimisi;
use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index()
    {
        return view('visitors.profil_desa.index', ['sejarahvisimisis' => sejarahvisimisi::take(1)->latest()->get()]);
    }
}
