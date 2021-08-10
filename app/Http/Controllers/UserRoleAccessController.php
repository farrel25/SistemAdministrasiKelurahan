<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        $permissions = Permission::get();

        return view('dashboard.manajemen_pengguna.role_dan_hak_akses', compact('roles', 'permissions'));
    }
    public function storeRole(Request $request)
    {
        // $attr = $request->validate([
        //     'category' => 'required|string'
        // ]);

        // $attr['slug'] = \Str::slug($attr['category']);
        // $attr['enabled'] = 1;

        // ArticleCategory::create($attr);

        // Alert::success('Berhasil', 'Kategori artikel berhasil ditambahkan');
        // return redirect()->route('manajemen-artikel.kategori');

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            FacadesAlert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Role::create([
            'name' => $request->name
        ]);

        FacadesAlert::success('Berhasil', 'Role baru berhasil ditambahkan');
        return back();
    }

    public function storeRolePermission(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            FacadesAlert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Permission::create([
            'name' => $request->name
        ]);

        FacadesAlert::success('Berhasil', 'Jenis hak akses baru berhasil ditambahkan');
        return back();
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
        // return view('dashboard.manajemen_pengguna.role_dan_hak_akses.role_dan_hak_akses-edit'/*, compact('articleCategory')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function updateRole(Request $request)
    {
        //     $attr = $request->validate([
        //         'category' => 'required|string'
        //     ]);
        //     $attr['slug'] = \Str::slug($attr['category']);

        //     $articleCategory->update($attr);

        //     Alert::success('Berhasil', 'Kategori artikel berhasil diperbarui');

        //     return redirect()->route('manajemen-artikel.kategori');

        $role = Role::findOrFail($request->id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            FacadesAlert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $attr['name'] = $request->name;

        $role->update($attr);

        FacadesAlert::success('Berhasil', 'Role berhasil diperbarui');
        return back();
    }

    public function updateRolePermission(Request $request, Role $role)
    {
        // $role->permissions()->sync($request->permission_id);
        $role->syncPermissions($request->permission_id);

        FacadesAlert::success('Berhasil', 'Hak akses berhasil diperbarui');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroyRole(Role $role)
    {
        $role->delete();

        FacadesAlert::success('Berhasil', 'Role berhasil dihapus');
        return back();
    }

    public function destroyRolePermission(Permission $permission)
    {
        return back();
    }

    // public function activation(Request $request, ArticleCategory $articleCategory)
    // {
    //     $attr = $request->validate([
    //         'enabled' => 'required|boolean'
    //     ]);

    //     $articleCategory->update($attr);

    //     if ($request->enabled == 1) {
    //         Alert::success(' Berhasil ', 'Kategori artikel di aktifkan');
    //     } else {
    //         Alert::success(' Berhasil ', 'Kategori artikel di non-aktifkan');
    //     }

    //     return redirect()->route('manajemen-artikel.kategori');
    // }
}