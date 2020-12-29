<?php

namespace App\Http\Controllers;

use App\LetterDocument;
use Illuminate\Http\Request;
use Alert;
use App\Exports\LetterDocumentExport;
use App\Imports\LetterDocumentImport;

class LetterDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = LetterDocument::latest()->paginate(10);
        return view('dashboard.manajemen_surat.dokumen_persyaratan.dokumen-persyaratan', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manajemen_surat.dokumen_persyaratan.tambah-dokumen-persyaratan');
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
        return view('dashboard.manajemen_surat.dokumen_persyaratan.edit-dokumen-persyaratan', compact('letterDocument'));
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
        Alert::success(' Berhasil ', ' Data Dokumen Persyaratan Berhasil Dihapus');
        return redirect()->route('manajemen-surat.dokumen-persyaratan');
    }

    public function destroySelected(Request $request)
    {
        $Ids = $request->ids;
        // dd($Ids);

        LetterDocument::whereIn('id', $Ids)->delete();
        // LetterDocument::whereIn('id', explode(',', $Ids))->delete();
        Alert::success(' Berhasil ', ' Data Penduduk Berhasil Dihapus');

        return redirect()->route('manajemen-surat.dokumen-persyaratan');
        // return response()->json(['status' => true, 'message' => "deleted successfully."]);
    }

    public function validateRequest()
    {
        return request()->validate([
            'document' => 'required|string|max:255|unique:letter_documents,document'
        ]);
    }

    public function export()
    {
        return (new LetterDocumentExport)->download('data_dokumen_persyaratan.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'dokumen_persyaratan' => 'required|file|mimes:xlsx,xls'
        ]);
        (new LetterDocumentImport)->import($request->file('dokumen_persyaratan'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        Alert::success(' Berhasil ', ' Dokumen persyaratan Berhasil Ditambahkan');
        return redirect()->route('manajemen-surat.dokumen-persyaratan');
    }
}
