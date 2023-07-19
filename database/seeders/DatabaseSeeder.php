<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(5)->create();

        Post::factory(10)->create();
        // User::create([
        //     'name' => 'Antipole', 
        //     'email' => 'apolantipole@gmail.com',
        //     'password' => '12345'
        // ]);

        // User::create([
        //     'name' => 'Stanford', 
        //     'email' => 'stando@gmail.com',
        //     'password' => '12345'
        // ]);

        // Post::create([
        //     'title' => 'Amamiya Kokoro',
        //     'slug' => 'amamiya-kokoro',
        //     'user_id' => 1,
        //     'excerpt' => 'Amamiya Kokoro is a female Japanese Virtual YouTuber affiliated with NIJISANJI',
        //     'body' => 'Amamiya Kokoro is a female Japanese Virtual YouTuber affiliated with NIJISANJI. She debuted alongside Eli Conifer and Ratna Petit, forming the trio known as "Posanke"']);

        //     Post::create([
        //         'title' => 'Chino Kafuu',
        //         'slug' => 'chino-kafuu',
        //         'user_id' => 2,
        //         'excerpt' => 'Chino Kafuu is one of the main protagonists of the Is the Order a Rabbit?',
        //         'body' => 'Chino Kafuu is one of the main protagonists of the Is the Order a Rabbit? manga series as well as its anime series. She is voiced by Inori Minase']);
    }
}
