<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintCategory extends Model
{
    protected $fillable = [
        'category',
        'is_enable'
    ];

    public function complaints() {
        return $this->hasMany(Complaint::class);
    }
}
