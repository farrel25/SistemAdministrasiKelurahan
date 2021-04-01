<?php

use App\VillageIdentity;
use Illuminate\Database\Seeder;

class VillageIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VillageIdentity::create([
            'village_name' => null,
            'village_code' => null,
            'kepala_desa_name' => null,
            'kepala_desa_nip' => null,
            'zip_code' => null,
            'kecamatan_name' => null,
            'kecamatan_code' => null,
            'kepala_camat_name' => null,
            'kepala_camat_nip' => null,
            'kabupaten_name' => null,
            'kabupaten_code' => null,
            'province_name' => null,
            'province_code' => null,
            'history' => null,
            'vision' => null,
            'mission' => null,
            'logo' => null,
            'background_pic' => null,
            'office_address' => null,
            'village_email' => null,
            'phone' => null,
            'website' => null,
            'instagram' => null,
            'facebook' => null,
            'twitter' => null,
            'youtube' => null,
        ]);
    }
}
