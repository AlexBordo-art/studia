<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\InteractiveElement;

class InteractiveElementSeeder extends Seeder
{
    public function run()
    {
        InteractiveElement::factory(10)->create();
    }
}
