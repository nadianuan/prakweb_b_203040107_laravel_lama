<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nadia Nur Annisa",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex libero vel asperiores facere fugit odio optio explicabo nostrum rem! Deleniti ullam architecto est praesentium nostrum placeat voluptate eum aspernatur, natus saepe quia nisi consequatur voluptas harum libero nulla maxime ab distinctio laboriosam sed fugit sint. Magnam sit, nemo error et iusto, vel a in asperiores unde tempora cupiditate illum commodi laboriosam placeat, labore recusandae atque. Perspiciatis autem porro animi obcaecati, ipsum tenetur itaque libero, eius veniam quibusdam laudantium. Quas, repellendus?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Qisti Izatussyabani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, sapiente placeat atque ab sequi, necessitatibus laudantium voluptatum cumque odio asperiores veritatis, numquam facere repudiandae saepe tempora quos velit quia aut consectetur. Aliquam iste deleniti voluptate, reprehenderit ab rerum? Repellat sapiente officiis minus fuga nobis voluptate maiores, doloribus aliquam ex repudiandae vero fugiat quia numquam minima consectetur tempore molestias reprehenderit inventore quo asperiores reiciendis ipsam quaerat magnam. Soluta quibusdam error nemo quisquam, omnis totam necessitatibus est eligendi rerum fuga consectetur dignissimos ad non et magnam rem sunt corrupti dolorem ea velit molestiae perspiciatis vero sed. Repellendus provident molestias voluptas incidunt officia?"
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
