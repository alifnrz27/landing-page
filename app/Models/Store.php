<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_image',
        'user_id',
        'brand_id',
        'name',
        'address',
        'province',
        'city',
        'subdistrict',
        'urban_village',
        'postal_code',
        'status_by_admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function promotionStores()
    {
        return $this->hasMany(PromotionStore::class, 'store_id');
    }
}
