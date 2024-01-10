<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'subdomain_id',
        'role_id',
        'email',
        'username',
        'phone_number',
        'total_point',
        'password',
        'image_path',
        'birthdate',
        'last_change_password',
        'last_digit_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function points()
    {
        return $this->hasMany(Point::class, 'user_id');
    }

    public function salesPoints()
    {
        return $this->hasMany(Point::class, 'sales_id');
    }

    public function salesPointsOneMonth()
    {
        $oneMonthAgo = Carbon::now()->subMonth();

        return $this->hasMany(Point::class, 'sales_id')
            ->where('created_at', '>=', $oneMonthAgo);
    }

    public function claimmed()
    {
        return $this->hasMany(ClaimedVoucherGift::class, 'user_id');
    }

    public function address()
    {
        return $this->hasMany(CustomerAddress::class, 'user_id')->where('is_primary', true);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
