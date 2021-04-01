<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VillageProfileController extends Controller
{

    public function strukturPemerintahan()
    {
        return view('visitors.profil_desa.struktur-pemerintahan');
    }
    public function sejarahVisiMisi()
    {
        return view('visitors.profil_desa.sejarah-visi-misi');
    }
}
