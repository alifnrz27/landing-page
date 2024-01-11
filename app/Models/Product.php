<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'title',
        'description',
        'thumbnail_path',
        'end_date',
        'price',
        'code',
        'stock',
        'is_all_stores',
        'status',
        'status_by_admin',
    ];

    public function ProductStores()
    {
        return $this->hasMany(ProductStore::class, 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
