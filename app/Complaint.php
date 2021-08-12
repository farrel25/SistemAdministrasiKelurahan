<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'complaint_category_id',
        'user_id',
        'name',
        'email',
        'phone_number',
        'complaint'
    ];

    public function category() {
        return $this->belongsTo(ComplaintCategory::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(ComplaintComment::class);
    }
}
