<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintComment extends Model
{
    protected $fillable = [
        'complaint_id',
        'user_id',
        'parent_complaint_comment_id',
        'comment'
    ];

    public function complaint() {
        return $this->belongsTo(Complaint::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
