<?php

namespace App\Http\Controllers;

use App\LetterDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Alert;

class LetterDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = $this->getMenu();
        $documents = LetterDocument::latest()->paginate(10);
        return view('dashboard.manajemen_surat.dokumen_persyaratan.dokumen-persyaratan', compact('menus', 'documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.dokumen_persyaratan.tambah-dokumen-persyaratan', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = $this->validateRequest();
        LetterDocument::create($document);
        Alert::success(' Berhasil ', ' Dokumen Persyaratan Berhasil Ditambahkan');
        return redirect()->route('manajemen-surat.dokumen-persyaratan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LetterDocument  $letterDocument
     * @return \Illuminate\Http\Response
     */
    public function show(LetterDocument $letterDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterDocument  $letterDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterDocument $letterDocument)
    {
        $menus = $this->getMenu();
        return view('dashboard.manajemen_surat.dokumen_persyaratan.edit-dokumen-persyaratan', compact('menus', 'letterDocument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterDocument  $letterDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterDocument $letterDocument)
    {
        $attr = $this->validateRequest();
        $letterDocument->update($attr);
        Alert::success(' Berhasil ', ' Dokumen Persyaratan Berhasil Diperbarui');
        return redirect()->route('manajemen-surat.dokumen-persyaratan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterDocument  $letterDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterDocument $letterDocument)
    {
        $letterDocument->delete();
        return redirect()->route('manajemen-surat.dokumen-persyaratan');
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

    public function validateRequest()
    {
        return request()->validate([
            'document' => 'required|string|max:255|unique:letter_documents,document'
        ]);
    }
}
