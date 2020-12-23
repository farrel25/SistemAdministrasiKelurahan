<?php

namespace App\Imports;

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
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VillagerImport implements ToModel, WithHeadingRow
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        $userId = Auth::user()->id;

        $sexes = VillagerSex::all()->ToArray();
        $sexId = null;
        for ($i = 0; $i < count($sexes); $i++) {
            # code...
            if ($row['jenis_kelamin'] == $sexes[$i]['sex']) {
                $sexId = $sexes[$i]['id'];
            }
        }

        $religion = VillagerReligion::all()->ToArray();
        $religionId = null;
        for ($i = 0; $i < count($religion); $i++) {
            # code...
            if ($row['agama'] == $religion[$i]['religion']) {
                $religionId = $religion[$i]['id'];
            }
        }

        $education = VillagerEducation::all()->ToArray();
        $educationId = null;
        for ($i = 0; $i < count($education); $i++) {
            # code...
            if ($row['pendidikan'] == $education[$i]['education']) {
                $educationId = $education[$i]['id'];
            }
        }

        $profession = VillagerProfession::all()->ToArray();
        $professionId = null;
        for ($i = 0; $i < count($profession); $i++) {
            # code...
            if ($row['pekerjaan'] == $profession[$i]['profession']) {
                $professionId = $profession[$i]['id'];
            }
        }

        $maritalStatus = VillagerMaritalStatus::all()->ToArray();
        $maritalStatusId = null;
        for ($i = 0; $i < count($maritalStatus); $i++) {
            # code...
            if ($row['status_kawin'] == $maritalStatus[$i]['marital_status']) {
                $maritalStatusId = $maritalStatus[$i]['id'];
            }
        }

        $nationality = VillagerNationalityStatus::all()->ToArray();
        $nationalityId = null;
        for ($i = 0; $i < count($nationality); $i++) {
            # code...
            if ($row['kewarganegaraan'] == $nationality[$i]['kewarganegaraan']) {
                $nationalityId = $nationality[$i]['id'];
            }
        }

        $bloodType = VillagerBloodType::all()->ToArray();
        $bloodTypeId = null;
        for ($i = 0; $i < count($bloodType); $i++) {
            # code...
            if ($row['golongan_darah'] == $bloodType[$i]['blood_type']) {
                $bloodTypeId = $bloodType[$i]['id'];
            }
        }

        $stayStatus = VillagerStayStatus::all()->ToArray();
        $stayStatusId = null;
        for ($i = 0; $i < count($stayStatus); $i++) {
            # code...
            if ($row['status_tinggal'] == $stayStatus[$i]['stay_status']) {
                $stayStatusId = $stayStatus[$i]['id'];
            }
        }

        $lifeStatus = VillagerLifeStatus::all()->ToArray();
        $lifeStatusId = null;
        for ($i = 0; $i < count($lifeStatus); $i++) {
            # code...
            if ($row['status_hidup'] == $lifeStatus[$i]['life_status']) {
                $lifeStatusId = $lifeStatus[$i]['id'];
            }
        }

        $disability = VillagerDisability::all()->ToArray();
        $disabilityId = null;
        for ($i = 0; $i < count($disability); $i++) {
            # code...
            if ($row['cacat'] == $disability[$i]['disability']) {
                $disabilityId = $disability[$i]['id'];
            }
        }

        $chronicDisease = VillagerChronicDisease::all()->ToArray();
        $chronicDiseaseId = null;
        for ($i = 0; $i < count($chronicDisease); $i++) {
            # code...
            if ($row['penyakit_kronis'] == $chronicDisease[$i]['disease']) {
                $chronicDiseaseId = $chronicDisease[$i]['id'];
            }
        }

        return new Villager([
            'nik' => $row['nik'],
            'user_id' => null,
            'full_name' => $row['nama_lengkap'],
            'sex_id' => $sexId,
            'birth_place' => $row['tempat_lahir'],
            'birth_date' => $row['tanggal_lahir'],
            'religion_id' => $religionId,
            'education_id' => $educationId,
            'profession_id' => $professionId,
            'marital_status_id' => $maritalStatusId,
            'nationality_id' => $nationalityId,
            'father_nik' => $row['nik_ayah'],
            'mother_nik' => $row['nik_ibu'],
            'father_name' => $row['nama_ayah'],
            'mother_name' => $row['nama_ibu'],
            'photo' => null,
            'blood_type_id' => $bloodTypeId,
            'stay_status_id' => $stayStatusId,
            'address' => $row['alamat'],
            'life_status_id' => $lifeStatusId,
            'disability_id' => $disabilityId,
            'chronic_disease_id' => $chronicDiseaseId,
            'phone_number' => $row['nomor_telepon'],
            'age_range_id' => null,
            'created_by' => $userId,
            'updated_by' => $userId,
        ]);
    }
}
