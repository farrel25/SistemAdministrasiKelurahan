<?php

namespace App\Http\Controllers;

use App\LetterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class LetterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->getMenu();

        $letterTypes = LetterType::paginate(10);
        // dd($letterTypes);

        return view('dashboard.manajemen_surat.jenis_surat.jenis-surat', compact('menus', 'letterTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.jenis_surat.tambah-jenis-surat', compact('menus'));
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
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function show(LetterType $letterType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterType $letterType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterType $letterType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterType $letterType)
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
