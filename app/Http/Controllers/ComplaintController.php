<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $letterSubmissions = ComplaintController::paginate(10);
        // $letterSubmissionTotal = count(ComplaintController::where('status_id', '!=', 4)->get());
        // $letterStatuses = LetterStatus::get();
        return view('dashboard.manajemen_pengaduan.pengaduan'/*, compact('letterSubmissions', 'letterSubmissionTotal', 'letterStatuses')*/);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $letterTypes = LetterType::get();
        // $user = Auth::user();
        // return view('dashboard.layanan.pengajuan_surat.pengajuan-surat-tambah'/*, compact('letterTypes', 'user')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ComplaintController = request()->validate([
        //     'nik' => 'required|digits:16',
        //     'full_name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'letter_type_id' => 'required',
        //     'keperluan' => 'required|string'
        // ]);
        // $ComplaintController['user_id'] = Auth::user()->id;
        // $ComplaintController['status_id'] = 1;
        // $ComplaintController['phone'] = Auth::user()->phone;

        // ComplaintController::create($ComplaintController);
        // // Alert::success('Permohonan pengajuan surat berhasil dikirim', "Silahkan ke <a href=" . route('dashboard') . ">halaman dashboard</a>anda untuk info lebih lanjut");
        // session()->flash('success', 'Pengajuan surat terkirim');

        // return redirect(route('pengajuan-surat.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplaintController  $ComplaintController
     * @return \Illuminate\Http\Response
     */
    public function show(ComplaintController $ComplaintController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplaintController  $ComplaintController
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplaintController $ComplaintController)
    {
        // return view('dashboard.layanan.pengajuan_surat.pengajuan-surat-edit'/*, compact('letterTypes', 'user')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplaintController  $ComplaintController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplaintController $ComplaintController)
    {
        // if ($request->ajax() && $request->isMethod('patch')) {
        //     //partially update record here
        //     dd($request->method());
        // }
        // $letterSubmissionId = ComplaintController::findOrFail($request->letter_id);
        // $attr = $request->validate([
        //     'status_id' => 'required|numeric'
        // ]);

        // $letterSubmissionId->update($attr);

        // Alert::success('Berhasil', 'Status pengajuan surat berhasil diperbarui');
        // return redirect()->route('manajemen-surat.pengajuan-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplaintController  $ComplaintController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplaintController $ComplaintController)
    {
        // $ComplaintController->delete();
        // Alert::success('Berhasil', 'Data pengajuan surat berhasil Ddhapus');
        // return redirect()->route('manajemen-surat.pengajuan-surat');
    }
}
