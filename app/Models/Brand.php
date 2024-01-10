<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_path',
        'total_shopping',
        'point',
        'company_name',
        'status',
    ];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function userBrand()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customers()
    {
        $subdomainId = $this->userBrand->subdomain_id;

        return User::where('subdomain_id', $subdomainId)
            ->where('role_id', 4)
            ->get();
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Claim::class)->where(['claim_type_id' => 1]);
    }

    public function gifts()
    {
        return $this->hasMany(Claim::class)->where(['claim_type_id' => 2]);
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
