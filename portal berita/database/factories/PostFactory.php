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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 7)),
            'catagory_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 3),
            'slug' => fake()->slug(),
            'exc' => fake()->paragraph(1),
            'body' => collect(fake()->paragraphs(mt_rand(3, 7)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
        ];
    }
}
