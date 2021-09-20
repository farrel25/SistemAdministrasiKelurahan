<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UmkmCategory extends Model
{
    protected $fillable = [
        'category',
        'is_enable',
    ];

    public function products() {
        return $this->hasMany(UmkmProduct::class);
    }
}
