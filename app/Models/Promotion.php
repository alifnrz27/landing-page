<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'title',
        'description',
        'limit',
        'thumbnail_path',
        'start_date',
        'end_date',
        'is_all_stores',
        'status',
        'status_by_admin',
    ];

    public function promotionStores()
    {
        return $this->hasMany(PromotionStore::class, 'promotion_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
