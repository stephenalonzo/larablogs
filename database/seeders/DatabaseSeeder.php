<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::factory()->create([
            'name' => 'Stephen',
            'email' => 'stephen@email.com'
        ]);

        $posts = Post::factory(15)->create([
            'user_id' => $user->id
        ]);

        // $post = Post::create([
        //     'title' => 'Test',
        //     'user_id' => $user->id,
        //     'description' => 'Test'
        // ]);

        $category = Category::create([
            'title' => 'Design'
        ]);
        $category = Category::create([
            'title' => 'Science'
        ]);
        $category = Category::create([
            'title' => 'Research'
        ]);
        $category = Category::create([
            'title' => 'Presentation'
        ]);
        $category = Category::create([
            'title' => 'Product'
        ]);
        
        foreach ($posts as $post)
        {

            CategoryPost::create([
                'category_id' => $category->id,
                'post_id'   => $post->id
            ]);

        }

    }
}
