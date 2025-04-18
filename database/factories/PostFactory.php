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
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(random_int(2, 7), true),
            'introduction' => fake()->paragraph(),
            'poster' => "https://picsum.photos/234/416",
            'poster_alt' => fake()->sentence(),
            'date' => fake()->date(),
            'uuid' => fake()->uuid(),
            'published' => fake()->boolean(),
        ];
    }
}

