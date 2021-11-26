<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'PHP 8.0',
                'Tailwind CSS',
                'Alpine',
                'Laravel',
                'Livewire',
            ])
        ];
    }
}
