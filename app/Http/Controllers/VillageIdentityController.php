<?php

namespace App\Http\Controllers;

use App\VillageIdentity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class VillageIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villageIdentity = VillageIdentity::first();
        // return $villageIdentity;
        return view('dashboard.info_kelurahan.identitas_kelurahan.identitas', compact('villageIdentity'));
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
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function show(VillageIdentity $villageIdentity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function edit(VillageIdentity $villageIdentity)
    {
        return view('dashboard.info_kelurahan.identitas_kelurahan.identitas-edit', compact('villageIdentity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VillageIdentity $villageIdentity)
    {
        // dd($request);
        $attr = $request->validate([
            'village_name' => 'required|string|max:100',
            'village_code' => 'required|string|max:100',
            'kepala_desa_name' => 'required|string|max:100',
            'kepala_desa_nip' => 'required|numeric|digits:18',
            'zip_code' => 'required|numeric|digits:5',
            'kecamatan_name' => 'required|string|max:100',
            'kecamatan_code' => 'required|string|max:100',
            'kepala_camat_name' => 'required|string|max:100',
            'kepala_camat_nip' => 'required|numeric|digits:18',
            'kabupaten_name' => 'required|string|max:100',
            'kabupaten_code' => 'required|string|max:100',
            'province_name' => 'required|string|max:100',
            'province_code' => 'required|string|max:100',
            'history' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'logo' => 'nullable|image|max:2000',
            'background_pic' => 'nullable|image|max:2048',
            'office_address' => 'nullable|string|max:255',
            'village_email' => 'nullable|email',
            'phone' => 'nullable|numeric',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        // cek apakah background pict sudah di inputkan
        if ($request->hasFile('background_pic')) {
            // ambil ukuran foto
            $bgSize = $request->file('background_pic')->getSize();
            // cek ukuran foto yg diupload
            if ($bgSize <= 2000000) {
                // cek apakah ada foto lama
                if ($villageIdentity->background_pic) {
                    // hapus foto lama
                    Storage::delete($villageIdentity->background_pic);
                }
                // ambil file foto
                $bg = $request->file('background_pic');
                // rename file foto
                $bgName = "bg_" . time() . "." . $bg->extension();
                // menentukan lokasi penyimpanan foto
                $bgUrl = $bg->storeAs("images/village/background_pic", "{$bgName}");
            } else {
                // jika foto yg diupload lebih dari 2MB, simpan yg lama
                $bgUrl = $villageIdentity->background_pic;
                // Alert::warning('Perhatian', 'Foto background tidak tersimpan karena ukuran file lebih dari 2MB');
            }
        } else {
            // jika foto tidak diupdate, simpan yg lama
            $bgUrl = $villageIdentity->background_pic;
        }

        // cek apakah logo sudah di inputkan
        if ($request->hasFile('logo')) {
            // ambil ukuran logo
            $logoSize = $request->file('logo')->getSize();
            // cek ukuran logo yg diupload
            if ($logoSize <= 2000000) {
                // cek apakah ada logo lama
                if ($villageIdentity->logo) {
                    // hapus logo lama
                    Storage::delete($villageIdentity->logo);
                }
                // ambil file logo
                $logo = $request->file('logo');
                // rename file logo
                $logoName = "logo_" . time() . "." . $logo->extension();
                // menentukan lokasi penyimpanan logo
                $logoUrl = $logo->storeAs("images/village/logo", "{$logoName}");
            } else {
                // jika logo yg diupload lebih dari 2MB, simpan yg lama
                $logoUrl = $villageIdentity->logo;
                // Alert::warning('Perhatian', 'logo tidak tersimpan karena ukuran file lebih dari 2MB');
            }
        } else {
            // jika logo tidak diupdate, simpan yg lama
            $logoUrl = $villageIdentity->logo;
        }

        $attr['bacground_pic'] = $bgUrl;
        $attr['logo'] = $logoUrl;

        $villageIdentity->update($attr);

        Alert::success('Berhasil', 'Identitas Desa Berhasil Diperbaharui');

        return redirect(route('info-desa.identitas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function destroy(VillageIdentity $villageIdentity)
    {
        //
    }
}
