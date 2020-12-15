<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratifController extends Controller
{

    public function index()
    {
        return view('visitors.profil_desa.administratif.index');
    }
    public function pendidikan()
    {
        return view('visitors.profil_desa.administratif.pendidikan');
    }
    public function pekerjaan()
    {
        return view('visitors.profil_desa.administratif.pekerjaan');
    }
    public function agama()
    {
        return view('visitors.profil_desa.administratif.agama');
    }
    public function wilayah()
    {
        return view('visitors.profil_desa.administratif.wilayah');
    }
    public function warganegara()
    {
        return view('visitors.profil_desa.administratif.warga-negara');
    }
}
