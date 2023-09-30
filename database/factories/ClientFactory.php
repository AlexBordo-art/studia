<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phoneNumber' => $this->faker->phoneNumber
        ];
    }
}
