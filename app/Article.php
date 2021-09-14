<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = ['category_id', 'user_id', 'title', 'thumbnail', 'slug', 'body', 'enabled', 'commentable', 'document', 'link_document', 'read_count'];
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters) {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query
        //         ->where('title', 'like', '%'.$filters['search'].'%')
        //         ->orWhere('body', 'like', '%'.$filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%');
        });

        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     return $query->whereHas('category', function($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class, 'article_id');
    }

    public function tags()
    {
        return $this->belongsToMany(ArticleTag::class, 'article_article_tag', 'article_id', 'tag_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
