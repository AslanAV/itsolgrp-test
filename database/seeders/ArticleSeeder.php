<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()
            ->count(20)
            ->hasTags(3)
            ->has(Comment::factory()->count(3))
            ->create();
    }
}
