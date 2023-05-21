<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function testArticlesPage(): void
    {
        $response = $this->get(route('articles'));

        $response->assertStatus(200);
    }

    public function testArticlePage(): void
    {
        $article = Article::factory()->create();
        $response = $this->get(route('article', $article));

        $response->assertStatus(200);
    }
}
