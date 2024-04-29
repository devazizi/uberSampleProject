<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    protected function getClients()
    {
        return [
            ['name'=> 'Alireza Rostam Mazaheri', 'phone_number' => '09123256432', 'is_vip' => false],
            ['name'=> 'Hassan Rafie', 'phone_number' => '09153542231', 'is_vip' => false],
        ];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getClients() as $clientKey => $client) {
            Client::create([...$client, 'password' => bcrypt('123456789')]);
        }
    }
}
