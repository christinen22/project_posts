<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'user' => $this->faker->name(),
            'email' => fake()->unique()->safeEmail(),
            'tags' => 'laravel, php, tailwind',
            'description' => $this->faker->paragraph(2)
        ];
    }
}
