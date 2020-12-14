<?php

use App\VillagerAgeRange;
use Illuminate\Database\Seeder;

class VillagerAgeRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ranges = [
            'Balita',
            'Anak - anak',
            'Dewasa',
            'Tua',
            'Di bawah 1 Tahun',
            '2 s/d 4 Tahun',
            '5 s/d 9 Tahun',
            '10 s/d 14 Tahun',
            '15 s/d 19 Tahun',
            '20 s/d 24 Tahun',
            '25 s/d 29 Tahun',
            '30 s/d 34 Tahun',
            '35 s/d 39 Tahun',
            '40 s/d 44 Tahun',
            '45 s/d 49 Tahun',
            '50 s/d 54 Tahun',
            '55 s/d 59 Tahun',
            '60 s/d 64 Tahun',
            '65 s/d 69 Tahun',
            '70 s/d 74 Tahun',
            'Di atas 75 Tahun'
        ];
        $from = [0, 6, 18, 31, 0, 2, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75];
        $to = [5, 17, 30, 120, 1, 4, 9, 14, 19, 24, 29, 34, 39, 44, 49, 54, 59, 64, 69, 74, 9999];

        for ($i = 0; $i < count($ranges); $i++) {
            VillagerAgeRange::create([
                'range' => $ranges[$i],
                'from' => $from[$i],
                'to' => $to[$i],
                'is_active' => 1
            ]);
        }
    }
}
