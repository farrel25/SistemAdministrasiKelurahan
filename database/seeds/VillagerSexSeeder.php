<?php

use App\VillagerSex;
use Illuminate\Database\Seeder;

class VillagerSexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexes = collect([
            'Laki - laki',
            'Perempuan'
        ]);

        $sexes->each(function ($sex) {
            VillagerSex::create([
                'sex' => $sex
            ]);
        });
    }
}
