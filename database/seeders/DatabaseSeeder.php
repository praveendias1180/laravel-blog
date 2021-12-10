<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Post::create([
            'title' => 'Personal Post',
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'slug' => 'personal-post',
            'excerpt' => 'The excerpt of the personal post',
            'body' => 'The body of the personal post.'
        ]);

        Post::create([
            'title' => 'Family Post',
            'category_id' => $family->id,
            'user_id' => $user->id,
            'slug' => 'family-post',
            'excerpt' => 'The excerpt of the family post',
            'body' => 'The body of the family post.'
        ]);

        Post::create([
            'title' => 'Other Post',
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'slug' => 'other-post',
            'excerpt' => 'The excerpt of the other post',
            'body' => 'The body of the other post.'
        ]);
    }
}
