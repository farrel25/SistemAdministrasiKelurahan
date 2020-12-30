<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['category', 'slug', 'enabled'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }
}
