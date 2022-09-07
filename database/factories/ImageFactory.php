<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image_name' => fake()->name(),
            'image_path' => fake()->name(),
        ];
    }

    public function image(): self
    {
        return $this->state(function(){
            return [
                'imageable_id' => function(){
                    return Post::factory()->create()->id;
                },
                'imageable_type' => 'posts'
            ];
        });
    }
}
