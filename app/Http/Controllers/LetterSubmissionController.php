<?php

namespace App\Http\Controllers;

use App\LetterSubmission;
use App\LetterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\LetterStatus;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

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

        $totalAntrian = count(LetterSubmission::where('status_id', 1)->get());
        $totalDiproses = count(LetterSubmission::where('status_id', 2)->get());
        $totalJadi = count(LetterSubmission::where('status_id', 3)->get());
        $totalDiambil = count(LetterSubmission::where('status_id', 4)->get());

        return view('dashboard.manajemen_surat.permohonan_surat.permohonan-surat', compact(
            'letterSubmissions',
            'letterSubmissionTotal',
            'letterStatuses',
            'totalAntrian',
            'totalDiproses',
            'totalJadi',
            'totalDiambil',
        ));
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
        $validator = Validator::make($request->all(), [
            'status_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            FacadesAlert::error('Gagal', 'Terdapat kesalahan input, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $letter = LetterSubmission::find($request->id);

        if ($letter != null) {
            $attr['status_id'] = $request->status_id;

            $letter->update($attr);

            FacadesAlert::success('Berhasil', 'Status surat berhasil diperbarui');
        } else {
            FacadesAlert::error('Gagal', 'Surat tidak dapat ditemukan');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterSubmission $letterSubmission)
    {
        $letterSubmission->delete();
        FacadesAlert::success('Berhasil', 'Data pengajuan surat berhasil Ddhapus');
        return redirect()->route('manajemen-surat.pengajuan-surat');
    }
}
