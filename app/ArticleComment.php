<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $fillable = ['article_id', 'user_id', 'full_name', 'email', 'comments', 'enabled'];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'email', 'email');
    // }
}
