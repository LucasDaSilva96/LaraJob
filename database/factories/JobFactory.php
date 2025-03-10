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
            'salary' => $this->faker->randomFloat(2, 1000, 9000),
            'employer_id' => \App\Models\Employer::factory()->create()->id,
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Temporary', 'Internship']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
            'tags' => Tag::factory()->count(3)->create()
        ];
    }
}
