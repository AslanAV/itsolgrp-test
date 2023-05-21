<?php

namespace Database\Factories;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomArticle = random_int(1, count(Article::get()));

        return [
            'article_id' => $randomArticle,
            'subject' => fake()->text(100),
            'body' => fake()->text(200),
            'created_at' => Carbon::now()->subDays(random_int(0, 365)),
        ];
    }
}
