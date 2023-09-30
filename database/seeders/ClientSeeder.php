<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $numberOfClients = 10;
        Client::factory($numberOfClients)->create();
    }
}