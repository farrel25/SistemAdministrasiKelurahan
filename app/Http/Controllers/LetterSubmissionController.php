<?php

namespace App\Http\Controllers;

use App\LetterSubmission;
use App\LetterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\LetterStatus;

class LetterSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $letterSubmissions = LetterSubmission::paginate(10);
        $letterSubmissionTotal = count(LetterSubmission::where('status_id', '!=', 4)->get());
        $letterStatuses = LetterStatus::get();
        return view('dashboard.manajemen_surat.permohonan_surat.permohonan-surat', compact('letterSubmissions', 'letterSubmissionTotal', 'letterStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $letterTypes = LetterType::get();
        $user = Auth::user();
        return view('visitors.pelayanan.pengajuan-surat', compact('letterTypes', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (request()->nik != Auth::user()->nik) {
        //     session()->flash('nik_check', 'Masukkan NIK milik anda dengan benar');
        // }
        // if (request()->full_name != Auth::user()->full_name) {
        //     session()->flash('full_name_check', 'Masukkan nama lengkap anda dengan benar');
        // }
        // if (request()->email != Auth::user()->email) {
        //     session()->flash('email_check', 'Masukkan email anda dengan benar');
        // }

        // if (!session()->has('nik_check') && !session()->has('full_name_check') && !session()->has('email_check'))
        $letterSubmission = request()->validate([
            'nik' => 'required|digits:16',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'letter_type_id' => 'required',
            'keperluan' => 'required|string'
        ]);
        $letterSubmission['user_id'] = Auth::user()->id;
        $letterSubmission['status_id'] = 1;
        $letterSubmission['phone'] = Auth::user()->phone;

        LetterSubmission::create($letterSubmission);
        // Alert::success('Permohonan pengajuan surat berhasil dikirim', "Silahkan ke <a href=" . route('dashboard') . ">halaman dashboard</a>anda untuk info lebih lanjut");
        session()->flash('success', 'Pengajuan surat terkirim');

        return redirect(route('pengajuan-surat.create'));
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
        //
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
        $letterSubmissionId = LetterSubmission::findOrFail($request->letter_id);
        $attr = $request->validate([
            'status_id' => 'required|numeric'
        ]);

        $letterSubmissionId->update($attr);

        Alert::success('Berhasil', 'Status pengajuan surat berhasil diperbarui');
        return redirect()->route('manajemen-surat.pengajuan-surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterSubmission $letterSubmission)
    {
        //
    }
}
