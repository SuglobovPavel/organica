<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $category_1 = Category::create([
            'name' => 'categoy 1',
            'slug' => 'category_1'
        ]);
        $category_2 = Category::create([
            'name' => 'categoy 2',
            'slug' => 'category_2'
        ]);
        $category_3 = Category::create([
            'name' => 'categoy 3',
            'slug' => 'category_3'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $category_1->id,
            'title' => 'My first post',
            'slug' => 'my-first-post',
            'except' => 'description my first post',
            'body' => 'text for my first post'
        ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $category_2->id,
            'title' => 'My second post',
            'slug' => 'my-second-post',
            'except' => 'description my second post',
            'body' => 'text for my second post'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $category_3->id,
            'title' => 'My third post',
            'slug' => 'my-third-post',
            'except' => 'description my third post',
            'body' => 'text for my third post'
        ]);
    }
}
