<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,5),
            'title_uz' => $this->faker->sentence,
            'title_ru' => $this->faker->sentence,
            'body_uz' => $this->faker->text,
            'body_ru' => $this->faker->text,
            'image' => 'Posts-Img.png',
            'view' => rand(0,30),
            'is_special' => rand(0,1),
        ];
        
    }
}