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

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet...',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit consectetur placeat! Doloribus unde delectus esse nulla dolores fugit? Consequuntur fugit aperiam at consectetur magni eaque. Debitis earum accusamus amet! Illum et animi tenetur natus nostrum quisquam esse suscipit earum. Quam nisi excepturi veniam, consequatur, cumque cum eius error qui, repellat aut at? Veritatis totam voluptas hic, iure rem commodi? Voluptas, nulla totam, at, repudiandae inventore nesciunt a sunt quo aliquid dolor iusto repellat saepe. Non, voluptas voluptate pariatur cumque sequi nulla officia obcaecati blanditiis quaerat modi et eum quidem?'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet...',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit consectetur placeat! Doloribus unde delectus esse nulla dolores fugit? Consequuntur fugit aperiam at consectetur magni eaque. Debitis earum accusamus amet! Illum et animi tenetur natus nostrum quisquam esse suscipit earum. Quam nisi excepturi veniam, consequatur, cumque cum eius error qui, repellat aut at? Veritatis totam voluptas hic, iure rem commodi? Voluptas, nulla totam, at, repudiandae inventore nesciunt a sunt quo aliquid dolor iusto repellat saepe. Non, voluptas voluptate pariatur cumque sequi nulla officia obcaecati blanditiis quaerat modi et eum quidem?'
        ]);
    }
}
