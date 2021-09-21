<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UmkmProduct extends Model
{
    protected $fillable = [
        'umkm_category_id',
        'umkm_profile_id',
        'product_name',
        'photo',
        'description',
        'price',
        'stock',
        'view_count',
    ];

    protected $with = ['category', 'profile'];

    public function scopeFilter($query, array $filters) {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('product_name', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%');
        });

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('category', $category)
            )
        );
    }

    public function category() {
        return $this->belongsTo(UmkmCategory::class, 'umkm_category_id');
    }

    public function profile() {
        return $this->belongsTo(UmkmProfile::class, 'umkm_profile_id');
    }
}
