<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\Villager;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::orderBy('urutan', 'asc')->get();
        return view('dashboard.info_kelurahan.kepengurusan.kepengurusan', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villagers = Villager::get();
        $roles = Role::get();
        return view('dashboard.info_kelurahan.kepengurusan.kepengurusan-tambah', compact('villagers', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoUrl = null;

        $attr = $request->validate([
            'villager' => 'required',
            'nip' => 'required|numeric|digits:18|unique:staff,nip',
            'nipd' => 'required|numeric|digits:21|unique:staff,nipd',
            'photo' => 'required|image|max:1000',
            'staff_position' => 'required|string',
            'position_period' => 'required|string',
            'pangkat' => 'required|string',
            // 'is_active' => 'required|boolean',
            'nomor_sk_angkat' => 'required|numeric',
            'tgl_sk_angkat' => 'required|date',
            'nomor_sk_henti' => 'numeric',
            'tgl_sk_henti' => 'date',
        ]);

        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil ukuran foto
            $photoSize = $request->file('photo')->getSize();
            // cek ukuran foto yg diupload, max masih 1MB
            if ($photoSize <= 1000000) {
                // ambil file foto
                $photo = $request->file('photo');
                // rename file foto
                $photoName = $request->nip . "." . $photo->extension();
                // menentukan lokasi penyimpanan foto
                $photoUrl = $photo->storeAs("images/staff_profile_pic", "{$photoName}");
            }
        }

        $villagerId = $request->villager;
        $villagerData = Villager::where('id', $villagerId)->get()->first();

        $attr['villager_id'] = null;
        $attr['villager_id'] = $villagerId;
        $attr['user_id'] = null;
        $attr['full_name'] = $villagerData->full_name;
        $attr['nik'] = $villagerData->nik;
        $attr['photo'] = $photoUrl;
        $attr['registered'] = date('Y-m-d', strtotime(Carbon::now()));
        $attr['urutan'] = Staff::get()->count() + 1;

        Staff::create($attr);

        Alert::success(' Berhasil ', 'Data staff berhasil ditambahkan');
        return redirect()->route('info-kelurahan.kepengurusan');
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
        $roles = Role::get();
        return view('dashboard.info_kelurahan.kepengurusan.kepengurusan-edit', compact('staff', 'roles'));
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
            'photo' => 'image|max:1024',
            'staff_position' => 'required|string',
            'position_period' => 'required|string',
            'pangkat' => 'required|string',
            // 'is_active' => 'required|boolean',
            'nomor_sk_angkat' => 'required|numeric',
            'tgl_sk_angkat' => 'required|date',
            'nomor_sk_henti' => 'numeric',
            'tgl_sk_henti' => 'date',
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
        $staffUserData = $staff->user;
        $staffVillagerData = $staffUserData->villager;
        $countStaffUser = $staffUserData->where('id', $staff->user_id)->count();
        $countStaffVillager = $staffVillagerData->where('id', $staff->user_id)->count();
        // dd($staffVillagerData->where('id', $staff->user_id)->count());

        if ($countStaffVillager == 1) {
            // update user_id di tabel villagers
            $staffVillagerData->update([
                'user_id' => null
            ]);
        }

        if ($countStaffUser == 1) {
            // hapus foto dari storage jika akun user si staff ada fotonya
            if ($staffUserData->photo) {
                \Storage::delete($staffUserData->photo);
            }
            // hapus akun user si staff
            $staffUserData->delete();
        }

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

        if ($request->is_active == 1) {
            Alert::success(' Berhasil ', 'Staff di aktifkan');
        } else {
            Alert::success(' Berhasil ', 'Staff di non-aktifkan');
        }

        return redirect()->route('info-desa.kepengurusan');
    }
}
