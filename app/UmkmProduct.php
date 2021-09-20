<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UmkmProduct extends Model
{
    protected $fillable = [
        'umkm_category_id',
        'product_name',
        'description',
        'price',
        'stock',
        'view_count',
    ];

    protected $with = ['category'];

    public function category() {
        return $this->belongsTo(UmkmCategory::class);
    }
}
