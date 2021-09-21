<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UmkmProfile extends Model
{
    protected $fillable = [
        'user_id',
        'brand',
        'full_name',
        'phone',
        'address',
        'website',
        'instagram',
        'facebook',
        'is_active',
    ];

    protected $with = ['user'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->hasMany(UmkmProduct::class, 'umkm_profile_id');
    }
}
