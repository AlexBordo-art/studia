<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PortfolioTableSeeder::class,
            OrderSeeder::class,
            ClientSeeder::class,
            InteractiveElementSeeder::class,
            ReviewSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class
        ]);
    }
}
