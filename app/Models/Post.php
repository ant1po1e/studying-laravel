<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Chino wangy",
            "slug" => "chino",
            "author" => "Antipole", 
            "body" => "uwoooooohhh seggggsss"
        ],
        [
            "title" => "Amamya wangy",
            "slug" => "amamya",
            "author" => "Stanford", 
            "body" => "uwooooohhh my wife so wangy fr"
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
