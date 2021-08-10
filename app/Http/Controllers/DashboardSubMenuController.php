<?php

namespace App\Http\Controllers;

use App\DashboardMenu;
use App\DashboardSubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DashboardMenu::get();
        $subMenus = DashboardSubMenu::with('DashboardMenu')->orderBy('menu_id', 'asc')->paginate(15);
        return view('dashboard.manajemen_menu.sub-menu', compact('menus', 'subMenus'));
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
        $validator = Validator::make($request->all(), [
            'menu_id' => 'required|numeric',
            'sub_menu' => 'required|string',
            'url_path' => 'required|string',
            'icon' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $attr['menu_id'] = $request->menu_id;
        $attr['sub_menu'] = $request->sub_menu;
        $attr['url_path'] = $request->url_path;
        $attr['icon'] = $request->icon;
        $attr['is_active'] = 1;

        DashboardSubMenu::create($attr);

        Alert::success('Berhasil', 'SubMenu baru berhasil ditambahkan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardSubMenu $dashboardSubMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardSubMenu $dashboardSubMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'menuId' => 'required|numeric',
            'name' => 'required|string',
            'url_path' => 'required|string',
            'icon' => 'required|string',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $submenu = DashboardSubMenu::find($request->id);

        if ($submenu != null) {
            $attr['menu_id'] = $request->menuId;
            $attr['sub_menu'] = $request->name;
            $attr['url_path'] = $request->url_path;
            $attr['icon'] = $request->icon;

            $submenu->update($attr);

            Alert::success('Berhasil', 'SubMenu berhasil diperbarui');
        } else {
            Alert::error('Gagal', 'SubMenu tidak dapat ditemukan');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DashboardSubMenu  $dashboardSubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardSubMenu $dashboardSubMenu)
    {
        try {
            //code...
            $dashboardSubMenu->delete();
            Alert::success('Berhasil', 'SubMenu berhasil dihapus');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Mohon Maaf', 'terjadi kesalahan saat menghapus data');
        }

        return back();
    }

    public function activation(Request $request, DashboardSubMenu $dashboardSubMenu)
    {
        $attr = $request->validate([
            'is_active' => 'required|boolean'
        ]);

        $dashboardSubMenu->update($attr);

        if ($dashboardSubMenu->is_active == 1) {
            Alert::success('Berhasil', 'SubMenu berhasil diaktifkan');
        } else {
            Alert::success('Berhasil', 'SubMenu berhasil dinon-aktifkan');
        }

        return back();
    }
}