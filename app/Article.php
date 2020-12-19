<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function articleCategory() {
        return $this->belongsTo(ArticleCategory::class);
    }
    public function articleComment() {
        return $this->hasMany(ArticleComment::class);
    }
    public function articleTag() {
        return $this->hasMany(ArticleTag::class);
    }
}
