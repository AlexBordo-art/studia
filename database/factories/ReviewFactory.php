<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientId' => $this->faker->randomDigit,
            'content' => $this->faker->sentence,
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}