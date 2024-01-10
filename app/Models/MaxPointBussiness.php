<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxPointBussiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'type', // 1 bulanan, 2 tahunan
        'max_point',
        'status',
    ];
}
