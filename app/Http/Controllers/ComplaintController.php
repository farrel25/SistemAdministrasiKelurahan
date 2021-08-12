<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

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
        // $complaint = request()->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'phone_number' => 'required|string|max:255',
        //     'complaint_category_id' => 'required',
        //     'complaint' => 'required|string'
        // ]);

        // $complaint['user_id'] = $request->user_id;
        // dd($complaint);

        // // ComplaintController::create($ComplaintController);
        // // // Alert::success('Permohonan pengajuan surat berhasil dikirim', "Silahkan ke <a href=" . route('dashboard') . ">halaman dashboard</a>anda untuk info lebih lanjut");
        // // session()->flash('success', 'Pengajuan surat terkirim');

        // return redirect(route('visitors.beranda.index'));



        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:255',
            'complaint_category_id' => 'required',
            'complaint' => 'required|string'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'Terdapat kesalahan input data pengaduan, silahkan coba lagi');
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Complaint::create($validator->valid());
        Complaint::create($validator->getData());
        Alert::success('Berhasil', 'Pengaduan anda terkirim');

        return back();
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
