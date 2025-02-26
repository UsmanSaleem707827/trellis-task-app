<?php

namespace Database\Factories;

use App\Models\Category;
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
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'category_id' => Category::inRandomOrder()->first()->id,
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'posts', true),
            'views' => $this->faker->numberBetween(0, 100),
            'is_featured' => $this->faker->boolean,
            'enable_comment' => $this->faker->boolean,
            'status' => true,
        ];
    }
}
