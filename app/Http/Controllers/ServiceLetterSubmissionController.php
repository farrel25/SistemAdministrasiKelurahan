<?php

namespace App\Http\Controllers;

// use App\ServiceLetterSubmissionController;
use App\LetterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\LetterStatus;

class ServiceLetterSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $letterSubmissions = ServiceLetterSubmissionController::paginate(10);
        // $letterSubmissionTotal = count(ServiceLetterSubmissionController::where('status_id', '!=', 4)->get());
        // $letterStatuses = LetterStatus::get();
        return view('dashboard.layanan.pengajuan_surat.pengajuan-surat'/*, compact('letterSubmissions', 'letterSubmissionTotal', 'letterStatuses')*/);
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
        // $ServiceLetterSubmissionController = request()->validate([
        //     'nik' => 'required|digits:16',
        //     'full_name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'letter_type_id' => 'required',
        //     'keperluan' => 'required|string'
        // ]);
        // $ServiceLetterSubmissionController['user_id'] = Auth::user()->id;
        // $ServiceLetterSubmissionController['status_id'] = 1;
        // $ServiceLetterSubmissionController['phone'] = Auth::user()->phone;

        // ServiceLetterSubmissionController::create($ServiceLetterSubmissionController);
        // // Alert::success('Permohonan pengajuan surat berhasil dikirim', "Silahkan ke <a href=" . route('dashboard') . ">halaman dashboard</a>anda untuk info lebih lanjut");
        // session()->flash('success', 'Pengajuan surat terkirim');

        // return redirect(route('pengajuan-surat.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceLetterSubmissionController  $ServiceLetterSubmissionController
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceLetterSubmissionController $ServiceLetterSubmissionController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceLetterSubmissionController  $ServiceLetterSubmissionController
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceLetterSubmissionController $ServiceLetterSubmissionController)
    {
        return view('dashboard.layanan.pengajuan_surat.pengajuan-surat-edit'/*, compact('letterTypes', 'user')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceLetterSubmissionController  $ServiceLetterSubmissionController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceLetterSubmissionController $ServiceLetterSubmissionController)
    {
        // if ($request->ajax() && $request->isMethod('patch')) {
        //     //partially update record here
        //     dd($request->method());
        // }
        // $letterSubmissionId = ServiceLetterSubmissionController::findOrFail($request->letter_id);
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
     * @param  \App\ServiceLetterSubmissionController  $ServiceLetterSubmissionController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceLetterSubmissionController $ServiceLetterSubmissionController)
    {
        // $ServiceLetterSubmissionController->delete();
        // Alert::success('Berhasil', 'Data pengajuan surat berhasil Ddhapus');
        // return redirect()->route('manajemen-surat.pengajuan-surat');
    }
}