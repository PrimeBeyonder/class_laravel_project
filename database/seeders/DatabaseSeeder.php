<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Foundation\Auth\User as AuthUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::factory(25)->create();
        Comment::factory(60)->create();

        User::factory()->create([
            'name' => "Andrew",
            "email"=> "andrew@gmail.com",
        ]);
        User::factory()->create([
            'name' => "Bob",
            "email"=> "bob@gmail.com",
        ]);

        $list = ["News" , "Tech", "Web", "Mobile" ,"OS"];
        foreach($list as $name ) {
            Category::create(['name' => $name]);
        }

    }
}
