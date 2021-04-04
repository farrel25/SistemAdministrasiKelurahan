<?php

namespace App\Http\Controllers;

use App\Villager;
use Illuminate\Http\Request;

class AdministratifController extends Controller
{

    public function index()
    {
        $countVillager = Villager::count();
        $countSexMale = Villager::where('sex_id', 1)->count();
        $sexMalePercentation = ($countSexMale / $countVillager) * 100;
        $countSexFemale = Villager::where('sex_id', 2)->count();
        $sexFemalePercentation = ($countSexFemale / $countVillager) * 100;
        return view('visitors.profil_desa.administratif', compact(
            'countVillager',
            'countSexMale',
            'sexMalePercentation',
            'countSexFemale',
            'sexFemalePercentation',
        ));
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
