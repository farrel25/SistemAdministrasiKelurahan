<?php

namespace App\Http\Controllers;

use App\Exports\VillagerExport;
use App\Imports\VillagerImport;
use App\Villager;
use App\VillagerBloodType;
use App\VillagerChronicDisease;
use App\VillagerDisability;
use App\VillagerEducation;
use App\VillagerLifeStatus;
use App\VillagerMaritalStatus;
use App\VillagerNationalityStatus;
use App\VillagerProfession;
use App\VillagerReligion;
use App\VillagerSex;
use App\VillagerStayStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // menghitung total data penduduk
        $totalVillager = count(Villager::get());

        // menghitung persentase penduduk yg aktif dari total penduduk
        $activeVillager = count(Villager::where('life_status_id', 1)->where('user_id', '!=', null)->get());
        $activePercentage = ($activeVillager / $totalVillager) * 100;

        // menghitung persentase penduduk yg tidak aktif dari total penduduk
        $notActiveVillager = count(Villager::where('life_status_id', 1)->where('user_id', '==', null)->get());
        $notActivePercentage = ($notActiveVillager / $totalVillager) * 100;

        // mengambil data penduduk dan ditampilkan 10 saja per pagination
        $villagers = Villager::latest()->paginate(15);
        // $villagers = Villager::latest()->simplePaginate(10);
        // $villagers = Villager::latest()->paginate(10)->fragment('villagers');

        // return $villagers;
        return view('dashboard.penduduk.penduduk', compact(
            'villagers',
            'totalVillager',
            'activeVillager',
            'activePercentage',
            'notActiveVillager',
            'notActivePercentage'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sexes = VillagerSex::get();
        $religions = VillagerReligion::get();
        $educations = VillagerEducation::get();
        $professions = VillagerProfession::get();
        $maritalStatuses = VillagerMaritalStatus::get();
        $stayStatuses = VillagerStayStatus::get();
        $lifeStatuses = VillagerLifeStatus::get();
        $nationalityStatuses = VillagerNationalityStatus::get();
        $bloodTypes = VillagerBloodType::get();
        $disabilities = VillagerDisability::get();
        $chronicDiseases = VillagerChronicDisease::get();

        return view('dashboard.penduduk.penduduk-tambah', compact(
            'sexes',
            'religions',
            'educations',
            'professions',
            'maritalStatuses',
            'stayStatuses',
            'lifeStatuses',
            'nationalityStatuses',
            'bloodTypes',
            'disabilities',
            'chronicDiseases'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ambil id user yang saat itu login
        $userId = Auth::user()->id;

        $photoUrl = null;

        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil ukuran foto
            $photoSize = $request->file('photo')->getSize();
            // cek ukuran foto yg diupload
            if ($photoSize <= 1000000) {
                // ambil file foto
                $photo = $request->file('photo');
                // rename file foto
                $photoName = $request->nik . "." . $photo->extension();
                // menentukan lokasi penyimpanan foto
                $photoUrl = $photo->storeAs("images/profile_pic", "{$photoName}");
            }
        }

        // validasi data yang di submit
        $villager = $this->validateRequest();

        $villager['photo'] = $photoUrl;
        $villager['created_by'] = $userId;
        $villager['updated_by'] = $userId;

        Villager::create($villager);
        Alert::success(' Berhasil ', ' Data Berhasil Ditambahkan');

        return redirect()->route('penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function show(Villager $villager)
    {
        return view('dashboard.penduduk.penduduk-detail', compact('villager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function edit(Villager $villager)
    {

        $sexes = VillagerSex::get();
        $religions = VillagerReligion::get();
        $educations = VillagerEducation::get();
        $professions = VillagerProfession::get();
        $maritalStatuses = VillagerMaritalStatus::get();
        $stayStatuses = VillagerStayStatus::get();
        $lifeStatuses = VillagerLifeStatus::get();
        $nationalityStatuses = VillagerNationalityStatus::get();
        $bloodTypes = VillagerBloodType::get();
        $disabilities = VillagerDisability::get();
        $chronicDiseases = VillagerChronicDisease::get();

        return view('dashboard.penduduk.penduduk-edit', compact(
            'villager',
            'sexes',
            'religions',
            'educations',
            'professions',
            'maritalStatuses',
            'stayStatuses',
            'lifeStatuses',
            'nationalityStatuses',
            'bloodTypes',
            'disabilities',
            'chronicDiseases'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villager $villager)
    {
        // ambil id user yang saat itu login
        $userId = Auth::user()->id;

        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil ukuran foto
            $photoSize = $request->file('photo')->getSize();
            // cek ukuran foto yg diupload
            if ($photoSize <= 1000000) {
                // cek apakah ada foto lama
                if ($villager->photo) {
                    // hapus foto lama
                    Storage::delete($villager->photo);
                }
                // ambil file foto
                $photo = $request->file('photo');
                // rename file foto
                $photoName = $villager->nik . "." . $photo->extension();
                // menentukan lokasi penyimpanan foto
                $photoUrl = $photo->storeAs("images/profile_pic", "{$photoName}");
            } else {
                // jika foto yg diupload lebih dari 1024KB, simpan yg lama
                $photoUrl = $villager->photo;
            }
        } else {
            // jika foto tidak diupdate, simpan yg lama
            $photoUrl = $villager->photo;
        }

        // validasi data yang di submit
        // $attr = $this->validateRequest();
        $attr = $request->validate([
            // 'nik' => 'required|numeric|digits:16|unique:villagers,nik',
            'full_name' => 'required|string|max:255',
            'sex_id' => 'required|integer',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion_id' => 'required|integer',
            'education_id' => 'required|integer',
            'profession_id' => 'required|integer',
            'marital_status_id' => 'required|integer',
            'nationality_id' => 'required|integer',
            'father_nik' => 'required|numeric|digits:16',
            'mother_nik' => 'required|numeric|digits:16',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'photo' => 'image|max:1024',
            'blood_type_id' => 'required|integer',
            'stay_status_id' => 'required|integer',
            'address' => 'required|string|max:255',
            'life_status_id' => 'required|integer',
            'disability_id' => 'required|integer',
            'chronic_disease_id' => 'required|integer',
            'phone_number' => 'required|numeric'
        ]);
        $attr['photo'] = $photoUrl;
        $attr['updated_by'] = $userId;

        $villager->update($attr);
        Alert::success(' Berhasil ', ' Data Berhasil Diperbaharui');

        return redirect()->route('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villager $villager)
    {
        if ($villager->photo) {
            Storage::delete($villager->photo);
        }
        $villager->delete();
        Alert::success(' Berhasil ', ' Data Penduduk Berhasil Dihapus');
        return redirect()->route('penduduk');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nik' => 'required|numeric|digits:16|unique:villagers,nik',
            'full_name' => 'required|string|max:255',
            'sex_id' => 'required|integer',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion_id' => 'required|integer',
            'education_id' => 'required|integer',
            'profession_id' => 'required|integer',
            'marital_status_id' => 'required|integer',
            'nationality_id' => 'required|integer',
            'father_nik' => 'required|numeric|digits:16',
            'mother_nik' => 'required|numeric|digits:16',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'photo' => 'image|max:1024',
            'blood_type_id' => 'required|integer',
            'stay_status_id' => 'required|integer',
            'address' => 'required|string|max:255',
            'life_status_id' => 'required|integer',
            'disability_id' => 'required|integer',
            'chronic_disease_id' => 'required|integer',
            'phone_number' => 'required|numeric'
        ]);
    }

    // Export data penduduk kedalam excel
    public function export()
    {
        // return Excel::download(new VillagerExport, 'penduduk.xlsx');
        return (new VillagerExport)->download('data_penduduk.xlsx');
    }

    // import excel data penduduk ke dalam database
    public function import(Request $request)
    {
        (new VillagerImport)->import($request->file('data_penduduk'), 'local', \Maatwebsite\Excel\Excel::XLSX);
        Alert::success(' Berhasil ', ' Data Penduduk Berhasil Ditambahkan');
        return redirect()->route('penduduk');
    }
}
