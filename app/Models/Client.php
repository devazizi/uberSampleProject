<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Client extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public $fillable = ['name', 'national_code', 'is_vip', 'phone_number'];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
