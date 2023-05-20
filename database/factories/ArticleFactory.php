<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->text(100),
            'content' => fake()->text(2000),
            'likes' => fake()->randomNumber(3, false),
            'views' => fake()->randomNumber(3, false),
        ];
    }
}
