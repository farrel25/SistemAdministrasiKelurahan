<?php

use App\VillagerStayStatus;
use Illuminate\Database\Seeder;

class VillagerStayStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stayStatuses = collect([
            'Tetap',
            'Tidak Tetap',
            'Pendatang'
        ]);

        $stayStatuses->each(function ($stayStatus) {
            VillagerStayStatus::create([
                'stay_status' => $stayStatus
            ]);
        });
    }
}
