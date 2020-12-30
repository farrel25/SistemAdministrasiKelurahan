<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $fillable = ['name_tag', 'slug', 'enabled'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_article_tag', 'tag_id', 'article_id');
    }
}
