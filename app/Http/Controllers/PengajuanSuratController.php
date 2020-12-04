<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('visitors.pelayanan.pengajuan-surat');
    }
}
