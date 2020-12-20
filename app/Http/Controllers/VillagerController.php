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

        // mengambil data penduduk dan ditampilkan 5 saja per pagination
        $villagers = Villager::paginate(5);

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
        $villager = $request->validate([
            'nik' => 'required|digits:16',
            'full_name' => 'required|string|max:255',
            'sex_id' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'religion_id' => 'required',
            'education_id' => 'required',
            'profession_id' => 'required',
            'marital_status_id' => 'required',
            'nationality_id' => 'required',
            'fathe_nik' => 'required',
            'mother_nik' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'blood_type_id' => 'required',
            'stay_status_id' => 'required',
            'address' => 'required',
            'life_status_id' => 'required',
            'disability_id' => 'required',
            'chronic_disease_id' => 'required',
            'phone_number' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villager  $villager
     * @return \Illuminate\Http\Response
     */
    public function show(Villager $villager)
    {
        //
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
        //
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
