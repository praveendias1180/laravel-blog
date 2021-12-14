<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()->create([
        //     'name' => 'Praveen Dias',
        //     'username' => 'praveen-dias'
        // ]);

        // $user2 = User::factory()->create([
        //     'name' => 'John Doe',
        //     'username' => 'john-doe'
        // ]);

        // $category = Category::factory()->create([
        //     'name' => 'Laravel',
        //     'slug' => 'laravel'
        // ]);

        // Post::factory(8)->create([
        //     'user_id' => $user->id,
        //     'category_id' => $category->id
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user2->id,
        // ]);

        // Post::factory(30)->create();

        Comment::factory(10)->create();
    }
}

