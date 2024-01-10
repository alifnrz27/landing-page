<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'address',
        'transfer_image',
        'receipt_number',
        'expedition',
        'is_used',
        'status',
    ];
}
