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

    public function pendudukaktif()
    {
        $menus = $this->getMenu();
        return view('dashboard.penduduk.penduduk-aktif', compact('menus'));
    }

    public function pendudukedit()
    {
        $menus = $this->getMenu();
        return view('dashboard.penduduk.penduduk-edit', compact('menus'));
    }

    public function pendudukdetail()
    {
        $menus = $this->getMenu();
        return view('dashboard.penduduk.penduduk-detail', compact('menus'));
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
