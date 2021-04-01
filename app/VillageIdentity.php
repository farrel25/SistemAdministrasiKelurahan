<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillageIdentity extends Model
{
    protected $fillable = [
        'village_name',
        'village_code',
        'kepala_desa_name',
        'kepala_desa_nip',
        'zip_code',
        'kecamatan_name',
        'kecamatan_code',
        'kepala_camat_name',
        'kepala_camat_nip',
        'kabupaten_name',
        'kabupaten_code',
        'province_name',
        'province_code',
        'history',
        'vision',
        'mission',
        'logo',
        'background_pic',
        'office_address',
        'village_email',
        'phone',
        'website',
        'instagram',
        'facebook',
        'twitter',
        'youtube',
    ];
}
