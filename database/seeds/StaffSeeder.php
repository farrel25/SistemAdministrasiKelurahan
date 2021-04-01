<?php

use App\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::create([
            'user_id' => 1,
            'villager_id' => 1,
            'full_name' => 'Codice Pugnator',
            'nik' => '3374101234567891',
            'nip' => '123456789123456789',
            'nipd' => '123456789123456789123',
            'photo' => null,
            'staff_position' => 'Kepala Desa',
            'position_period' => '6 Tahun Periode Pertama (2020 s/d 2026)',
            'pangkat' => 'mayor',
            'registered' => '2020-02-20',
            'nomor_sk_angkat' => null,
            'tgl_sk_angkat' => null,
            'nomor_sk_henti' => null,
            'tgl_sk_henti' => null,
            'ttd_an' => 1,
            'ttd_ub' => 1,
            'urutan' => 1,
            'is_active' => 1,
        ]);
    }
}
