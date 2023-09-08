<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        User::factory(5)->create(['post_author' => true]);
        Category::factory(8)->create();
        Post::factory(50)->create();
        Comment::factory(250)->create();
    }
}
