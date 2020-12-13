<?php

use App\VillagerBloodType;
use Illuminate\Database\Seeder;

class VillagerBloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloodTypes = collect([
            'A',
            'B',
            'AB',
            'O',
            'A+',
            'A-',
            'B+',
            'B-',
            'AB+',
            'AB-',
            'O+',
            'O-',
            'Tidak Tahu',
        ]);

        $bloodTypes->each(function ($bloodType) {
            VillagerBloodType::create([
                'blood_type' => $bloodType
            ]);
        });
    }
}
