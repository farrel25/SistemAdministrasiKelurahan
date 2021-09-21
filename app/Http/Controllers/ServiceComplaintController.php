<?php

namespace App\Http\Controllers;

use App\LetterSubmission;
use App\LetterType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Complaint;
use App\LetterStatus;

class ServiceComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $letterSubmissions = LetterSubmission::paginate(10);
        // $letterSubmissionTotal = count(LetterSubmission::where('status_id', '!=', 4)->get());
        // $letterStatuses = LetterStatus::get();
        $userId = Auth::user()->id;
        $complaints = Complaint::where('user_id', $userId)->get();
        // return $complaints;
        return view('dashboard.layanan.pengaduan.pengaduan', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     // $letterTypes = LetterType::get();
    //     // $user = Auth::user();
    //     return view('dashboard.layanan.pengaduan.pengajuan-surat-tambah'/*, compact('letterTypes', 'user')*/);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $letterSubmission = request()->validate([
        //     'nik' => 'required|digits:16',
        //     'full_name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'letter_type_id' => 'required',
        //     'keperluan' => 'required|string'
        // ]);
        // $letterSubmission['user_id'] = Auth::user()->id;
        // $letterSubmission['status_id'] = 1;
        // $letterSubmission['phone'] = Auth::user()->phone;

        // LetterSubmission::create($letterSubmission);
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
    // public function edit(LetterSubmission $letterSubmission)
    // {
    //     return view('dashboard.layanan.pengajuan_surat.pengajuan-surat-edit'/*, compact('letterTypes', 'user')*/);
    // }

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
        // $letterSubmissionId = LetterSubmission::findOrFail($request->letter_id);
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
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterSubmission $letterSubmission)
    {
        // $letterSubmission->delete();
        // Alert::success('Berhasil', 'Data pengajuan surat berhasil Ddhapus');
        // return redirect()->route('manajemen-surat.pengajuan-surat');
    }
}
