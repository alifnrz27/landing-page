<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryCustomerPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'point_id',
        'description',
        'is_income_point',
        'point',
    ];

    public function points()
    {
        return $this->belongsTo(Point::class, 'point_id');
    }

}
