<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Alert;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::get();
        return view('dashboard.info_kelurahan.kepengurusan.kepengurusan', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        Alert::success(' Berhasil ', 'Staff berhasil dihapus');
        return redirect()->route('info-kelurahan.kepengurusan');
    }

    public function activation(Request $request, Staff $staff)
    {
        $attr = $request->validate([
            'is_active' => 'required|boolean'
        ]);

        $staff->update($attr);

        if ($request->enabled == 1) {
            Alert::success(' Berhasil ', 'Staff di aktifkan');
        } else {
            Alert::success(' Berhasil ', 'Staff di non-aktifkan');
        }

        return redirect()->route('info-kelurahan.kepengurusan');
    }
}
