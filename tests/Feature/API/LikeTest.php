<?php

namespace Tests\Feature\API;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LikeTest extends TestCase
{
    use RefreshDatabase;

    public function testApiCommentPage(): void
    {
        $article = Article::factory()->create();
        $data = ['article_id' => $article->id];

        $response = $this->post(route('api_likes_post'), $data);

        $response->assertStatus(200);
    }
}
