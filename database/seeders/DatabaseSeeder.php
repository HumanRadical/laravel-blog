<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        User::factory(5)->create();
        Category::factory(8)->create();
        Post::factory(50)->create();
    }
}
