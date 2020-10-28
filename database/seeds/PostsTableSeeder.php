<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
    {
        $users = User::all();

        for ($i=0; $i < 10; $i++) {
            $newPost = new Post;
            $newPost->title = $faker->sentence(3);
            $newPost->body = $faker->text(500);
            $newPost->img = $faker->imageUrl(640,480);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->user_id = $users->random()->id;

            $newPost->save();
        }
    }

}
