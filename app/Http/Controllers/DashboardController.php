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
    public function penduduktambah()
    {
        return view('dashboard.penduduk.penduduk-tambah');
    }
    public function pendudukedit()
    {
        return view('dashboard.penduduk.penduduk-edit');
    }
}
