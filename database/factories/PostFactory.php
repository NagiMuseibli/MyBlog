<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'user_id' => 1,
            'title' => $this->faker->unique->sentence(),
            'excerpt' => $this->faker->realText($maxNbChars = 50),
            'body' => $this->faker->text(),
            'image_path' => $this->faker->imageUrl(640, 480),
            'is_published' => false,
            'min_to_read' => $this->faker->numberBetween(1, 10),

        ];
    }
}
