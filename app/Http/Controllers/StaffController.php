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
        return view('dashboard.info_kelurahan.kepengurusan.kepengurusan-edit', compact('staff'));
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
        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil ukuran foto
            $photoSize = $request->file('photo')->getSize();
            // cek ukuran foto yg diupload
            if ($photoSize <= 1000000) {
                // cek apakah ada foto lama
                if ($staff->photo) {
                    // hapus foto lama
                    \Storage::delete($staff->photo);
                }
                // ambil file foto
                $photo = $request->file('photo');
                // rename file foto
                $photoName = $staff->nip . "." . $photo->extension();
                // menentukan lokasi penyimpanan foto
                $photoUrl = $photo->storeAs("images/staff_profile_pic", "{$photoName}");
            } else {
                // jika foto yg diupload lebih dari 1024KB, simpan yg lama
                $photoUrl = $staff->photo;
            }
        } else {
            // jika foto tidak diupdate, simpan yg lama
            $photoUrl = $staff->photo;
        }

        $attr = $request->validate([
            'full_name' => 'required|string',
            // 'nik' => 'required|numeric|digits:16|unique:staff,nik',
            // 'nip' => 'required|numeric|digits:18|unique:staff,nip',
            // 'nipd' => 'required|numeric|digits:21|unique:staff,nipd',
            // 'photo' => 'image|max:1024',
            'staff_position' => 'required|string',
            'position_period' => 'required|string',
            'pangkat' => 'required|string',
            // 'is_active' => 'required|boolean',
            // 'nomor_sk_angkat' => 'required|numeric',
            // 'tgl_sk_angkat' => 'required|date',
            // 'nomor_sk_henti' => 'numeric',
            // 'tgl_sk_henti' => 'date',
        ]);

        $attr['photo'] = $photoUrl;

        $staff->update($attr);

        Alert::success(' Berhasil ', 'Data staff berhasil diperbarui');
        return redirect()->route('info-kelurahan.kepengurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if ($staff->photo) {
            \Storage::delete($staff->photo);
        }
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
