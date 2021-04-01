<?php

namespace App\Http\Controllers;

use App\DashboardMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return DashboardMenu::with('dashboardSubMenus')->get();
        $menus = DashboardMenu::get();
        // dd($menus);
        return view('dashboard.manajemen_menu.menu.menu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string'
        ]);

        DashboardMenu::create($attr);
        Permission::create($attr);

        Alert::success('Berhasil', 'Menu baru berhasil ditambahkan');

        return redirect()->route('manajemen-menu.menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardMenu $dashboardMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardMenu $dashboardMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string'
        ]);

        $menu = DashboardMenu::find($request->menuId);

        if ($menu != null) {
            $permission = Permission::where('name', $menu->name)->first();
            if ($permission != null) {
                $menu->update($attr);
                $permission->update($attr);
                Alert::success('Berhasil', 'Menu berhasil diperbarui');
            } else {
                Alert::error('Update Gagal', 'hak akses menu tidak dapat ditemukan');
            }
        } else {
            Alert::error('Update Gagal', 'menu tidak dapat ditemukan');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashboardMenu  $dashboardMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardMenu $dashboardMenu)
    {
        $permission = Permission::where('name', $dashboardMenu->name)->first();

        if ($permission != null) {
            $dashboardMenu->delete();
            $permission->delete();
            Alert::success('Berhasil', 'Menu berhasil dihapus');
        } else {
            Alert::error('Gagal', 'tidak ada hak akses menu yang sesuai dengan menu');
        }

        return back();
    }
}
