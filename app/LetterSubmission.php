<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterSubmission extends Model
{
    protected $fillable = ['user_id', 'letter_type_id', 'status_id', 'keperluan', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function letterType()
    {
        return $this->belongsTo(LetterType::class);
    }

    public function letterStatus()
    {
        return $this->belongsTo(LetterStatus::class, 'status_id');
    }
}
