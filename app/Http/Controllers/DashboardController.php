<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = $this->getMenu();
        return view('dashboard.beranda.index', compact('menus'));
    }

    public function penduduk()
    {
        return view('dashboard.penduduk.penduduk');
    }

    public function pendudukaktif()
    {
        return view('dashboard.penduduk.penduduk-aktif');
    }

    public function penduduktambah()
    {
        return view('dashboard.penduduk.penduduk-tambah');
    }

    public function pendudukedit()
    {
        return view('dashboard.penduduk.penduduk-edit');
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
