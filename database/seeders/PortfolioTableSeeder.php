<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

/**
 * Class PortfolioTableSeeder
 *
 * @package Database\Seeders
 */
class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run(): void
    {
        Portfolio::factory(10)->create();
    }
}