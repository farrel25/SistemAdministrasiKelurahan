<?php

namespace App\Http\Controllers;

use App\ArticleDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Alert;
// use RealRashid\SweetAlert\Facades\Alert;

class ArticleDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->getMenu();

        // $letterTypes = LetterType::paginate(10);
        // dd($letterTypes);

        return view('dashboard.manajemen_artikel.artikel.artikel', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_artikel.artikel.artikel-tambah', compact('menus'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $letterType = $request->validate([
    //         'letter_code' => 'required|alpha_dash|unique:letter_types,letter_code',
    //         'type' => 'required|string|max:255',
    //         // 'validity_period' => 'required|numeric|min:1|max:31',
    //         // 'validity_period_unit' => 'required|alpha',
    //     ]);

    //     // LetterType::create($letterType);
    //     // Alert::success(' Berhasil ', 'Jenis artikel berhasil Ditambahkan');

    //     return redirect()->route('manajemen-artikel.jenis-artikel');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\LetterType  $letterType
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(LetterType $letterType)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\LetterType  $letterType
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_artikel.artikel.artikel-edit', compact('menus'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\LetterType  $letterType
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, LetterType $letterType)
    // {
    //     $attr = $request->validate([
    //         'type' => 'required|string|max:255',
    //         // 'validity_period' => 'required|numeric|min:1|max:31',
    //         // 'validity_period_unit' => 'required|alpha',
    //     ]);

    //     // $letterType->update($attr);
    //     // Alert::success(' Berhasil ', 'Jenis artikel berhasil Diperbarui');

    //     return redirect()->route('manajemen-artikel.jenis-artikel');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\LetterType  $letterType
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(LetterType $letterType)
    // {
    //     // $letterType->delete();
    //     // Alert::success(' Berhasil ', 'Jenis artikel berhasil Dihapus');
    //     return redirect()->route('manajemen-artikel.jenis-artikel');
    // }

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