<?php

use App\VillagerDisability;
use Illuminate\Database\Seeder;

class VillagerDisabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disabilities = collect([
            'Cacat Fisik',
            'Tunanetra',
            'Tunarungu',
            'Cacat Mental / Jiwa',
            'Cacat Fisik dan Mental',
            'Cacat Lainnya',
            'Tidak Cacat'
        ]);

        $disabilities->each(function ($disability) {
            VillagerDisability::create([
                'disability' => $disability
            ]);
        });
    }
}
