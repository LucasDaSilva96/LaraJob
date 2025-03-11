<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'location' => $this->faker->city(),
            'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD', '$200,000 USD', '$250,000 USD']),
            'employer_id' => \App\Models\Employer::factory(),
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
        ];
    }
}
