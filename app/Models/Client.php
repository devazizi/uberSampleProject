<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $fillable = ['name', 'national_code', 'is_vip', 'phone_number'];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
