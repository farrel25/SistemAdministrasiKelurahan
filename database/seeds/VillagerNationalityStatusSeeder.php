<?php

use App\VillagerNationalityStatus;
use Illuminate\Database\Seeder;

class VillagerNationalityStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationalityStatuses = collect([
            'WNI',
            'WNA',
            'Dua Kewarganegaraan'
        ]);

        $nationalityStatuses->each(function ($nationalityStatus) {
            VillagerNationalityStatus::create([
                'kewarganegaraan' => $nationalityStatus
            ]);
        });
    }
}
