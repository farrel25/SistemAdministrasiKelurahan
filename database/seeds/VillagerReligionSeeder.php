<?php

use App\VillagerReligion;
use Illuminate\Database\Seeder;

class VillagerReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religions = collect([
            'Islam',
            'Kristen',
            'Katolik',
            'Hindu',
            'Budha',
            'Khonghucu',
            'Lainnya',
        ]);

        $religions->each(function ($religion) {
            VillagerReligion::create([
                'religion' => $religion
            ]);
        });
    }
}
