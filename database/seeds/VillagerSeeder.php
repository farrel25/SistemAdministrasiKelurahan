<?php

use App\Villager;
use Illuminate\Database\Seeder;

class VillagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Villager::create([
            'nik' => 3374101234567891,
            'user_id' => 1,
            'full_name' => 'Codice Pugnator',
            'sex_id' => 1,
            'birth_place' => 'Semarang',
            'birth_date' => '2000-04-01',
            'religion_id' => 1,
            'education_id' => 8,
            'profession_id' => 1,
            'marital_status_id' => 1,
            'nationality_id' => 1,
            'father_nik' => 3374101234567892,
            'mother_nik' => 3374101234567893,
            'father_name' => 'Bapak',
            'mother_name' => 'Ibuk',
            'photo' => null,
            'blood_type_id' => 3,
            'stay_status_id' => 1,
            'address' => 'Konohagakure',
            'life_status_id' => 1,
            'disability_id' => 7,
            'chronic_disease_id' => 14,
            'phone_number' => '082112345678',
            'age_range_id' => 10,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
