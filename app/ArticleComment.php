<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    public function article(){
        return $this->belongsTo(ArticleTag::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
