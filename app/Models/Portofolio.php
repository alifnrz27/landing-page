<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'price_first_time',
        'price',
        'type',
        'discount',
    ];

    public function features()
    {
        return $this->hasMany(PortofolioFeature::class, 'portofolio_id');
    }
}
