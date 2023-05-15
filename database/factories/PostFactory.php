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
            'title' => $this->faker->sentence(),
            'price' => '30000',
            'viewedTimes' => 1,
            'location' => $this->faker->city(),
            'categories' => 'Elektronik Rumahan',
            'description' => $this->faker->paragraph(10),
        ];
    }
}
