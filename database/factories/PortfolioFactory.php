<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'projectName' => $this->faker->word,
            'description' => $this->faker->sentence,
            'imageURL' => $this->faker->imageUrl(),
            'completionDate' => $this->faker->date()
        ];
    }
}