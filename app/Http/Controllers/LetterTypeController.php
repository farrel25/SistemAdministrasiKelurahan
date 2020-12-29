<?php

namespace App\Http\Controllers;

use App\LetterType;
use Illuminate\Http\Request;
use Alert;
use App\Exports\LetterTypeExport;
use App\Imports\LetterTypeImport;
use App\LetterDocument;

// use RealRashid\SweetAlert\Facades\Alert;

class LetterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letterTypes = LetterType::orderBy('letter_code', 'asc')->paginate(10);
        // dd($letterTypes);

        return view('dashboard.manajemen_surat.jenis_surat.jenis-surat', compact('letterTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $letterDocuments = LetterDocument::get();
        return view('dashboard.manajemen_surat.jenis_surat.tambah-jenis-surat', compact('letterDocuments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->letter_document_id);

        $attr = $request->validate([
            'letter_code' => 'required|alpha_dash|unique:letter_types,letter_code',
            'type' => 'required|string|max:255',
            'validity_period' => 'required|numeric|min:1|max:31',
            'validity_period_unit' => 'required|alpha',
        ]);

        $letterType = LetterType::create($attr);
        $letterType->letterDocuments()->attach($request->letter_document_id);

        Alert::success(' Berhasil ', 'Jenis Surat berhasil Ditambahkan');

        return redirect()->route('manajemen-surat.jenis-surat');
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
        // dd($letterType->letter_code);
        $letterDocuments = LetterDocument::get();

        // $requirementCheck = \DB::table('letter_requirements')->where('letter_type_id', $letterType->id)->get();
        $requirementCheck = \DB::table('letter_document_letter_type')->where('type_id', $letterType->id)->pluck('document_id')->toArray();
        // $requirementCheck = \DB::table('letter_requirements')->where('letter_type_id', $letterType->id)->get()->toArray();
        // dd($requirementCheck);

        return view('dashboard.manajemen_surat.jenis_surat.edit-jenis-surat', compact('letterType', 'letterDocuments', 'requirementCheck'));
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
        // dd($request->letter_document_id);

        $attr = $request->validate([
            'type' => 'required|string|max:255',
            'validity_period' => 'required|numeric|min:1|max:31',
            'validity_period_unit' => 'required|alpha',
        ]);

        $letterType->update($attr);
        $letterType->letterDocuments()->sync($request->letter_document_id);

        Alert::success(' Berhasil ', ' Jenis Surat Berhasil Diperbarui');
        return redirect()->route('manajemen-surat.jenis-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterType $letterType)
    {
        $letterType->letterDocuments()->detach();
        $letterType->delete();
        Alert::success(' Berhasil ', 'Jenis Surat berhasil Dihapus');
        return redirect()->route('manajemen-surat.jenis-surat');
    }

    public function export()
    {
        return (new LetterTypeExport)->download('data_jenis_surat.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'letter_types' => 'required|file|mimes:xlsx,xls'
        ]);
        (new LetterTypeImport)->import($request->file('letter_types'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        Alert::success(' Berhasil ', ' Jenis Surat Berhasil Ditambahkan');
        return redirect()->route('manajemen-surat.jenis-surat');
    }
}
