<?php

namespace App\Http\Controllers;

use App\Villager;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = $this->getMenu();
        $villagers = Villager::where('life_status_id', 1)->where('user_id', '!=', null)->paginate(5);
        // dd($villagers);
        return view('dashboard.beranda.index', compact('menus', 'villagers'));
    }

    //penduduk
    public function pendudukaktif()
    {
        $menus = $this->getMenu();
        return view('dashboard.penduduk.penduduk-aktif', compact('menus'));
    }

    //Surat
    public function cetaksurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.cetak_surat.cetak-surat', compact('menus'));
    }
    public function jenissurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.jenis_surat.jenis-surat', compact('menus'));
    }
    public function panduan()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.panduan', compact('menus'));
    }
    public function permohonansurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.permohonan_surat.permohonan-surat', compact('menus'));
    }
    public function suratkeluar()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_keluar.surat-keluar', compact('menus'));
    }
    public function suratmasuk()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_masuk.surat-masuk', compact('menus'));
    }

    //tambah
    public function tambahcetaksurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.cetak_surat.tambah-cetak-surat', compact('menus'));
    }
    public function tambahjenissurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.jenis_surat.tambah-jenis-surat', compact('menus'));
    }
    public function tambahsuratkeluar()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_keluar.tambah-surat-keluar', compact('menus'));
    }
    public function tambahsuratmasuk()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_masuk.tambah-surat-masuk', compact('menus'));
    }

    //edit
    public function editjenissurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.jenis_surat.edit-jenis-surat', compact('menus'));
    }
    public function editpermohonansurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_masuk.edit-permohonan-suratk', compact('menus'));
    }
    public function editsuratkeluar()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_keluar.edit-surat-keluar', compact('menus'));
    }
    public function editsuratmasuk()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.surat_masuk.edit-surat-masuk', compact('menus'));
    }


    //buat
    public function buatcetaksurat()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.cetak_surat.buat-cetak-surat', compact('menus'));
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
