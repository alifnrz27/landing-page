<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'claim_id',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function claim()
    {
        return $this->belongsTo(Claim::class, 'claim_id');
    }
}
