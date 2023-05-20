<?php

namespace Database\Seeders;

use App\Models\Article;
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
            ->count(30)
            ->hasTags(3)
            ->hasComments(4)
            ->create();
    }
}
