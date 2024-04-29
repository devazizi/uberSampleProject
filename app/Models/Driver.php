<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name', 'last_name', 'phone_number',
        'driver_license_id', 'national_code', 'active_city_id',
        'is_verified', 'is_banned'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
