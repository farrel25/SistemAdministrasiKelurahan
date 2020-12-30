<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $fillable = ['article_id', 'owner', 'email', 'comments', 'enabled'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'email', 'email');
    // }
}
