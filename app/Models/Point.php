<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'user_id',
        'store_id',
        'nominal',
        'point',
        'note',
        'image',
        'sales_id',
        'status',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sales()
    {
        return $this->belongsTo(User::class, 'sales_id');
    }
}
