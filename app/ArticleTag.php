<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    public function article() {
        return $this->hasMany(Article::class);
    }
}
