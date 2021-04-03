<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LetterStatus;
use App\LetterSubmission;
use App\LetterType;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceLetterSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $letterSubmissions = LetterSubmission::with('letterType', 'letterStatus')->where('user_id', Auth::user()->id)->paginate(10);
        $letterSubmissionTotal = count(LetterSubmission::where('status_id', '!=', 4)->get());
        $letterStatuses = LetterStatus::get();
        // return $letterSubmissions;
        return view('dashboard.layanan.pengajuan_surat.pengajuan-surat', compact('letterSubmissions', 'letterSubmissionTotal', 'letterStatuses'));
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
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(LetterSubmission $letterSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterSubmission $letterSubmission)
    {
        if ($letterSubmission->status_id != 1) {
            Alert::warning('Surat Sedang Diproses', 'Anda tidak dapat melakukan perubahan data');
            return back();
        }

        $letterTypes = LetterType::get();

        return view('dashboard.layanan.pengajuan_surat.pengajuan-surat-edit', compact('letterSubmission', 'letterTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterSubmission $letterSubmission)
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

        $attr = $request->validate([
            'letter_type_id' => 'required|numeric',
            'keperluan' => 'required|string'
        ]);

        $letterSubmission->update($attr);

        Alert::success('Berhasil', 'Perubahan data pengajuan surat terkirim');

        return redirect()->route('layanan.pengajuan-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterSubmission $letterSubmission)
    {
    }
}
