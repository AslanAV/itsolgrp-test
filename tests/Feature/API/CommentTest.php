<?php

namespace Tests\Feature\API;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    public function testApiCommentPage(): void
    {
        $article = Article::factory()->create();
        $data = [
            'article_id' => $article->id,
            'body' => 'body',
            'subject' => 'subject'
        ];

        $response = $this->post(route('api_comments_post'), $data);

        $response->assertStatus(200);
    }
}
