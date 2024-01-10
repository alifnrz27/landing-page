<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimedVoucherGift extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'claim_id',
        'brand_id',
        'code',
        'valid_until',
        'use_date',
        'redeem_store',
        'in_store',
        'address',
        'receipt_number',
        'expedition',
        'exchange_rate',
        'is_used',
        'is_delivered',
        'status',
    ];

    public function claim()
    {
        return $this->belongsTo(Claim::class, 'claim_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'redeem_store', 'user_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'redeem_store', 'user_id');
    }
}
