<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = 
    [
        ["title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ardian Syahputra",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse iusto facere labore voluptatibus, soluta quibusdam atque error quod expedita perferendis, modi ducimus consequuntur provident quis. Nemo cumque rem eius quo!"],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Nurna Ningsih",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse iusto facere labore voluptatibus, soluta quibusdam atque error quod expedita perferendis, modi ducimus consequuntur provident quis. Nemo cumque rem eius quo!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
