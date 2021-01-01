<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'user_id',
        'villager_id',
        'full_name',
        'nik',
        'nip',
        'nipd',
        'photo',
        'staff_position',
        'position_period',
        'pangkat',
        'registered',
        'nomor_sk_angkat',
        'tgl_sk_angkat',
        'nomor_sk_henti',
        'tgl_sk_henti',
        'ttd_an',
        'ttd_ub',
        'urutan',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function villager()
    {
        return $this->belongsTo(Villager::class);
    }

    public function letterSubmissions()
    {
        return $this->hasMany(LetterSubmission::class, 'dittd_oleh', 'id');
    }
}
