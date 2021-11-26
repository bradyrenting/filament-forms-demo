<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Hello World!',
                'My first post!'
            ]),
        ];
    }

    public function withCategories()
    {
        return $this->afterCreating(function (Post $post) {
            $post->categories()->sync([1, 2]);
        });
    }
}
