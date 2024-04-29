<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public $fillable = [
        'driver_id', 'trip_status', 'description',
        'description', 'source_lat', 'source_lot', 'destination_lat',
        'destination_lot', 'city_id', 'client_id', 'payment_id',
        'suggest_driver_id', 'suggest_driver_status'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function suggestedDriver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
