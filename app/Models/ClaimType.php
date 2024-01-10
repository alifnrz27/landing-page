<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimType extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'brand_id',
        'claim_type_id',
        'change_type_id',
        'title',
        'description',
        'thumbnail_path',
        'validity_duration',
        'limit',
        'start_date',
        'end_date',
        'exchange_rate',
    ];
}
