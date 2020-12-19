<?php

use App\VillagerEducation;
use Illuminate\Database\Seeder;

class VillagerEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educations = collect([
            'Tidak / Belum Sekolah',
            'Belum Tamat SD / Sederajat',
            'Tamat SD / Sederajat',
            'SLTP / Sederajat',
            'SLTA / Sederajat',
            'Diploma I / II',
            'Akademi / Diploma III / S. Muda',
            'Diploma IV / Strata I',
            'Strata II',
            'Strata III'
        ]);

        $educations->each(function ($education) {
            VillagerEducation::create([
                'education' => $education
            ]);
        });
    }
}
