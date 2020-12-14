<?php

use App\VillagerChronicDisease;
use Illuminate\Database\Seeder;

class VillagerChronicDiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = collect([
            'Jantung',
            'Liver',
            'Paru - paru',
            'Kanker',
            'Stroke',
            'Diabetes Melitus',
            'Ginjal',
            'Malaria',
            'Lepra / Kusta',
            'HIV / AIDS',
            'Gila / stres',
            'TBC',
            'Asma',
            'Tidak Ada'
        ]);

        $diseases->each(function ($disease) {
            VillagerChronicDisease::create([
                'disease' => $disease
            ]);
        });
    }
}
