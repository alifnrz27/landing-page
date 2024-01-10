<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'claim_type_id',
        'change_type_id',
        'stock',
        'title',
        'description',
        'thumbnail_path',
        'validity_duration',
        'limit',
        'start_date',
        'end_date',
        'exchange_rate',
        'change_system_id',
        'is_all_stores',
        'status',
        'status_by_admin',
    ];

    public function claimStores()
    {
        return $this->hasMany(ClaimStore::class, 'claim_id');
    }

    public function claimmed()
    {
        return $this->hasMany(ClaimedVoucherGift::class, 'claim_id');
    }

    public function claimType()
    {
        return $this->belongsTo(ClaimType::class, 'claim_type_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
