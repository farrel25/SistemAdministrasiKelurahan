<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterDocument extends Model
{
    //
    protected $fillable = ['document'];

    public function letterTypes()
    {
        return $this->belongsToMany(LetterType::class);
    }
}
