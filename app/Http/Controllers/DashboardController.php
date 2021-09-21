<?php

namespace App\Http\Controllers;

use App\User;
use App\Villager;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function index()
    {
        // $userName = Auth::user()->full_name;
        // $userRole = Auth::user()->roles->toArray()[0]['name'];

        $villagers = Villager::where('life_status_id', 1)->where('user_id', '!=', null)->paginate(5);

        return view('dashboard.beranda.index', compact('villagers'));
    }

    //penduduk
    public function pendudukaktif()
    {
        return view('dashboard.penduduk.penduduk-aktif');
    }
    //Surat
    public function panduan()
    {
        return view('dashboard.manajemen_surat.panduan.panduan');
    }
    public function suratkeluar()
    {

        return view('dashboard.manajemen_surat.surat_keluar.surat-keluar');
    }
    public function suratmasuk()
    {
        return view('dashboard.manajemen_surat.surat_masuk.surat-masuk');
    }

    //tambah
    public function tambahcetaksurat()
    {
        return view('dashboard.manajemen_surat.cetak_surat.tambah-cetak-surat');
    }
    public function tambahsuratkeluar()
    {
        return view('dashboard.manajemen_surat.surat_keluar.tambah-surat-keluar');
    }
    public function tambahsuratmasuk()
    {
        return view('dashboard.manajemen_surat.surat_masuk.tambah-surat-masuk');
    }

    //edit
    public function editpermohonansurat()
    {
        return view('dashboard.manajemen_surat.surat_masuk.edit-permohonan-surat');
    }
    public function editsuratkeluar()
    {
        return view('dashboard.manajemen_surat.surat_keluar.edit-surat-keluar');
    }
    public function editsuratmasuk()
    {
        return view('dashboard.manajemen_surat.surat_masuk.edit-surat-masuk');
    }


    //buat
    public function buatcetaksurat()
    {
        return view('dashboard.manajemen_surat.cetak_surat.buat-cetak-surat');
    }

    //Artikel
    public function artikel()
    {
        return view('dashboard.manajemen_artikel.artikel.artikel');
    }

    public function getMenu()
    {
        // ambil id user yg sedang login
        $userId = Auth::user()->id;

        // ambil role user yang sedang login berdasarkan id user
        $userRoleId = \DB::table('model_has_roles')->where('model_id', $userId)->value('role_id');

        // ambil menu yang boleh diakses user berdasarkan role user
        return Permission::select('permissions.id', 'permissions.name')
            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->where('role_has_permissions.role_id', $userRoleId)
            ->get();
    }
}
