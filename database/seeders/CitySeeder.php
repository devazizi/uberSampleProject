<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    private function getCities(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'تهران',
                'name_en' => 'Tehran'
            ],            [
                'id' => 2,
                'name' => 'قم',
                'name_en' => 'Qom'
            ],
        ];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getCities() as $cityKey => $city) {
            City::create([
                'name' => $city['name'],
                'name_en' => $city['name_en']
            ]);
        }
    }
}
