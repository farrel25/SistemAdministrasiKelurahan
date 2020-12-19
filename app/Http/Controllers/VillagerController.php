<?php

namespace App\Http\Controllers;

use App\Villager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->getMenu();
        $villagers = Villager::paginate(5);
        // dd($villagers);
        return view('dashboard.penduduk.penduduk', compact('menus', 'villagers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function show(Villager $villager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function edit(Villager $villager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villager $villager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villager $villager)
    {
        //
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
