<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'building_type_id',
        'province',
        'city',
        'subdistrict',
        'urban_village',
        'detail',
        'postal_code',
        'is_primary',
    ];

    public function buildingType()
    {
        return $this->belongsTo(BuildingType::class, 'building_type_id');
    }
}
