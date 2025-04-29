<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Aldira Givari",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nesciunt error laborum, explicabo deleniti, cupiditate magni ea voluptatum ut omnis maxime itaque iste. Molestiae, minima commodi nam dignissimos ipsum dolore ipsa magni quaerat numquam aperiam! Placeat rem, sequi dolorum alias officia fugiat quos similique molestias, quisquam soluta unde aliquid repellat ullam harum maiores, assumenda laborum explicabo consequuntur minus? Veniam saepe accusamus quisquam nulla, minima pariatur! Voluptas tempore rem in odit dolores officia voluptatum, delectus consectetur alias odio modi, corporis reiciendis."
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Bella Nurullita bau tai",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nesciunt error laborum, explicabo deleniti, cupiditate magni ea voluptatum ut omnis maxime itaque iste. Molestiae, minima commodi nam dignissimos ipsum dolore ipsa magni quaerat numquam aperiam! Placeat rem, sequi dolorum alias officia fugiat quos similique molestias, quisquam soluta unde aliquid repellat ullam harum maiores, assumenda laborum explicabo consequuntur minus? Veniam saepe accusamus quisquam nulla, minima pariatur! Voluptas tempore rem in odit dolores officia voluptatum, delectus consectetur alias odio modi, corporis reiciendis."
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
