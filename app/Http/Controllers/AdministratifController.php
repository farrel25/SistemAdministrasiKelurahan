<?php

namespace App\Http\Controllers;

use App\Villager;
use App\VillagerEducation;
use App\VillagerNationalityStatus;
use App\VillagerProfession;
use App\VillagerReligion;
use App\VillagerSex;
use Illuminate\Http\Request;

class AdministratifController extends Controller
{

    public function index()
    {
        $countVillager = Villager::count();

        $sexes = VillagerSex::get();
        $sexDatas = $sexes->map(function($sex) use ($countVillager) {
            $total = $sex->villagers->count();
            return [
                'sex' => $sex->sex,
                'total' => $total,
                'percentage' => ($total / $countVillager) * 100,
            ];
        });

        $educations = VillagerEducation::get();
        $eduDatas = $educations->map(function($education) use ($countVillager) {
            $total = $education->villagers->count();
            return [
                'education' => $education->education,
                'total' => $total,
                'percentage' => ($total / $countVillager) * 100,
            ];
        });

        $professions = VillagerProfession::get();
        $profDatas = $professions->map(function($profession) use ($countVillager) {
            $total = $profession->villagers->count();


            // $prof = $profession->has('villagers')->orderBy('id', 'asc')->get();
            // dump($prof);
            // die();

            // $total = $prof->map(function($pr) use($countVillager) {
            //     $total2 = $pr->villagers->count();
            //     // $prof2 = $pr->profession;
            //     // dump($total2);
            //     // return $pr->villagers->count();
            //     return [
            //         'profession' => $pr->profession,
            //         'total' => $total2,
            //         'percentage' => ($total2 / $countVillager) * 100,
            //     ];
            // });

            // return $prof->map(function($pr) use($countVillager) {
            //     $total2 = $pr->villagers->count();
            //     // $prof2 = $pr->profession;
            //     // dump($prof2);
            //     // return $pr->villagers->count();

            //     return [
            //         'profession' => $pr->profession,
            //         'total' => $total2,
            //         'percentage' => ($total2 / $countVillager) * 100,
            //     ];
            // });
            // // die();


            return [
                'profession' => $profession->profession,
                'total' => $total,
                'percentage' => ($total / $countVillager) * 100,
            ];
        });

        $religions = VillagerReligion::get();
        $relDatas = $religions->map(function($religion) use ($countVillager) {
            $total = $religion->villagers->count();
            return [
                'religion' => $religion->religion,
                'total' => $total,
                'percentage' => ($total / $countVillager) * 100,
            ];
        });

        $nationalities = VillagerNationalityStatus::get();
        $natDatas = $nationalities->map(function($nationality) use ($countVillager) {
            $total = $nationality->villagers->count();
            return [
                'nationality' => $nationality->kewarganegaraan,
                'total' => $total,
                'percentage' => ($total / $countVillager) * 100,
            ];
        });

        return view('visitors.profil_desa.administratif', compact(
            'sexDatas',
            'eduDatas',
            'profDatas',
            'relDatas',
            'natDatas',
        ));
    }
    public function pendidikan()
    {
        return view('visitors.profil_desa.administratif.pendidikan');
    }
    public function pekerjaan()
    {
        return view('visitors.profil_desa.administratif.pekerjaan');
    }
    public function agama()
    {
        return view('visitors.profil_desa.administratif.agama');
    }
    public function wilayah()
    {
        return view('visitors.profil_desa.administratif.wilayah');
    }
    public function warganegara()
    {
        return view('visitors.profil_desa.administratif.warga-negara');
    }
}
