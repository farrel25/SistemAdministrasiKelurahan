<?php

namespace App\Http\Controllers;

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
use Spatie\Permission\Models\Permission;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data menu halaman dashboard
        $menus = $this->getMenu();

        // menghitung total data penduduk
        $totalVillager = count(Villager::get());

        // menghitung persentase penduduk yg aktif dari total penduduk
        $activeVillager = count(Villager::where('life_status_id', 1)->where('user_id', '!=', null)->get());
        $activePercentage = ($activeVillager / $totalVillager) * 100;

        // mengambil data penduduk dan ditampilkan 10 saja per pagination
        $villagers = Villager::latest()->paginate(10);
        // $villagers = Villager::latest()->simplePaginate(10);
        // $villagers = Villager::latest()->paginate(10)->fragment('villagers');

        return view('dashboard.penduduk.penduduk', compact('menus', 'villagers', 'totalVillager', 'activePercentage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = $this->getMenu();

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
            'menus',
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

        // cek apakah foto sudah di inputkan
        if ($request->hasFile('photo')) {
            // ambil file foto
            $photo = $request->file('photo');
            // rename file foto
            $photoName = $request->nik . "." . $photo->extension();
            // menentukan lokasi penyimpanan foto
            $photoUrl = $photo->storeAs("images/profile_pic", "{$photoName}");
        }

        // validasi data yang di submit
        $villager = $request->validate([
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
            'photo' => 'required|image',
            'blood_type_id' => 'required|integer',
            'stay_status_id' => 'required|integer',
            'address' => 'required|string|max:255',
            'life_status_id' => 'required|integer',
            'disability_id' => 'required|integer',
            'chronic_disease_id' => 'required|integer',
            'phone_number' => 'required|numeric'
        ]);
        $villager['photo'] = $photoUrl;
        $villager['created_by'] = $userId;
        $villager['updated_by'] = $userId;

        Villager::create($villager);

        session()->flash('success', 'Data Penduduk Berhasil Ditambahkan');

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
        $menus = $this->getMenu();
        return view('dashboard.penduduk.penduduk-detail', compact('menus', 'villager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function edit(Villager $villager)
    {
        //
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
        //
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
            \Storage::delete($villager->photo);
        }
        $villager->delete();
        session()->flash('success', "Penduduk berhasil dihapus");
        return redirect()->route('penduduk');
    }

    public function getMenu()
    {
        // ambil id user yg sedang login
        $userId = Auth::user()->id;

        // ambil role user yang sedang login berdasarkan id user
        $userRoleId = \DB::table('model_has_roles')->where('model_id', $userId)->value('role_id');

        // ambil menu yang boleh diakses user berdasarkan role user
        return Permission::select('permissions.id', 'permissions.name')
            ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
            ->where('role_has_permissions.role_id', $userRoleId)
            ->get();
    }
}
