<?php

use App\StaffPosition;
use Illuminate\Database\Seeder;

class StaffPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = collect([
            'Kepala Desa',
            'Sekretaris',
            'KAUR Umum',
            'KAUR Keuangan',
            'KAUR Pembangunan',
            'KAUR Keamanan dan Ketertiban'
        ]);

        $positions->each(function ($position) {
            StaffPosition::create([
                'position' => $position
            ]);
        });
    }
}
