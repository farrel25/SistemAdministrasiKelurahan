<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratifController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('visitors.profil_desa.administratif.index');
    }
}
