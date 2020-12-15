<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.beranda.index');
    }
    public function penduduk()
    {
        return view('dashboard.penduduk.penduduk');
    }
    public function pendudukaktif()
    {
        return view('dashboard.penduduk.penduduk-aktif');
    }
}
