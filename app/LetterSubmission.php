<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterSubmission extends Model
{
    protected $fillable = ['user_id', 'letter_type_id', 'status_id', 'keperluan', 'phone', 'dittd_oleh', 'disetujui_oleh'];
    protected $with = ['user', 'letterType', 'letterStatus'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // yg ttd
    public function staff()
    {
        return $this->belongsTo(Staff::class, 'dittd_oleh');
    }

    // yg mengetahui
    public function staff2()
    {
        return $this->belongsTo(Staff::class, 'disetujui_oleh');
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
