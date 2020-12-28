<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterStatus extends Model
{
    protected $fillable = ['status'];

    public function letterSubmission()
    {
        return $this->hasMany(LetterSubmission::class, 'status_id');
    }
}
