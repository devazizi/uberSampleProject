<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    protected function getDrivers()
    {
        return [
            [
                'first_name' => 'Hossein',
                'last_name' => ' Motagi',
                'phone_number' => '09124565876',
                'driver_license_id' => 495949405348,
                'national_code' => '01119857437',
                'active_city_id' => 1,
                'is_verified' => true,
                'is_banned' => false,
                'password' => bcrypt(123456789)
            ]
        ];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getDrivers() as $driverKey => $driver) {
            Driver::create($driver);
        }
    }
}
