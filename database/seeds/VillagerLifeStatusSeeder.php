<?php

use App\VillagerLifeStatus;
use Illuminate\Database\Seeder;

class VillagerLifeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lifeStatuses = collect([
            'Hidup',
            'Mati',
            'Pindah',
            'Hilang',
            'Tidak Valid'
        ]);

        $lifeStatuses->each(function ($lifeStatus) {
            VillagerLifeStatus::create([
                'life_status' => $lifeStatus
            ]);
        });
    }
}
