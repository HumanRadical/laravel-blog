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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        Post::factory(3)->create([
            'user_id' => $user1->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user2->id
        ]);
    }
}
