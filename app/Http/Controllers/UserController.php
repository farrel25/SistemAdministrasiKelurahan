<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Staff;
use App\User;
use App\Villager;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        $roles = Role::get();
        return view('dashboard.manajemen_pengguna.pengguna', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villagers = Villager::where('user_id', null)->get();
        $roles = Role::get();

        return view('dashboard.manajemen_pengguna.pengguna.pengguna-tambah', compact('villagers', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoUrl = null;

        $attr = $request->validate([
            'villager' => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
            'photo' => 'image|max:1000'
        ]);

        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil ukuran foto
            $photoSize = $request->file('photo')->getSize();
            // cek ukuran foto yg diupload, max masih 1MB
            if ($photoSize <= 1000000) {
                // ambil file foto
                $photo = $request->file('photo');
                // rename file foto
                $prefix = explode('@', $request->email);
                $photoName = $prefix[0] . "." . $photo->extension();
                // menentukan lokasi penyimpanan foto
                $photoUrl = $photo->storeAs("images/user_profile_pic", "{$photoName}");
            }
        }

        $villagerStaffData = Staff::where('villager_id', $request->villager)->get()->first();
        $villagerData = Villager::where('id', $request->villager)->get()->first();
        $registeredAsStaff = Staff::where('nik', $villagerData->nik)->get()->count();

        if ($registeredAsStaff != 0) {
            $attr['nik'] = $villagerData->nik;
            $attr['full_name'] = $villagerData->full_name;
            $attr['password'] = Hash::make($request->password);
            $attr['phone'] = $villagerData->phone_number;
            $attr['photo'] = $photoUrl;
            $attr['is_active'] = 1;

            // buat akun dan berikan role
            User::create($attr)->assignRole($request->role);

            // update attribut user_id di tabel villagers dan staff
            $userId = User::where('nik', $villagerData->nik)->pluck('id')->first();
            $villagerData->update([
                'user_id' => $userId
            ]);
            $villagerStaffData->update([
                'user_id' => $userId
            ]);

            FacadesAlert::success('Berhasil', 'Akun user berhasil dibuat');
            return redirect()->route('manajemen-pengguna.pengguna');
        } else {
            FacadesAlert::error('Penduduk bukan staff kelurahan', 'Silahkan daftarkan penduduk sebagai staff kelurahan');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    // public function show(ArticleCategory $category)
    // {
    //     $all_articles = Article::get();
    //     $articles = $category->articles()->where('enabled', 1)->latest()->paginate(6);
    //     // dd($articles);
    //     $count = $articles->count();
    //     $article_comments = ArticleComment::take(5)->latest()->get();

    //     return view('visitors.artikel.index', compact('all_articles', 'articles', 'category', 'count', 'article_comments'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(/*ArticleCategory $articleCategory*/)
    {
        return view('dashboard.manajemen_pengguna.pengguna.pengguna-edit'/*, compact('articleCategory')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $user = User::findOrFail($request->id);
        // dd($user);
        $user->syncRoles([$request->role_name]);

        FacadesAlert::success('Berhasil', 'Role pengguna berhasil diperbarui');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $userStaff = $user->staff;
        $userVillager = $user->villager;

        // update user_id di tabel staff
        $userStaff->update([
            'user_id' => null
        ]);

        // update user_id di tabel villager
        $userVillager->update([
            'user_id' => null
        ]);

        // hapus dari storage juga jika user punya foto
        if ($user->photo) {
            Storage::delete($user->photo);
        }

        $user->delete();

        FacadesAlert::success('Berhasil', 'Akun Pengguna berhasil dihapus');
        return redirect()->route('manajemen-pengguna.pengguna');
    }

    public function activation(Request $request, User $user)
    {
        $attr = $request->validate([
            'is_active' => 'required|boolean'
        ]);

        $user->update($attr);

        if ($request->is_active == 1) {
            FacadesAlert::success(' Berhasil ', 'Akun pengguna di aktifkan');
        } else {
            FacadesAlert::success(' Berhasil ', 'Akun pengguna di non-aktifkan');
        }

        return redirect()->route('manajemen-pengguna.pengguna');
    }
}