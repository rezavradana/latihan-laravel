<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza Pradana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt numquam, 
            rerum omnis deserunt at soluta eveniet ab tenetur sunt aspernatur ullam corrupti, 
            nobis sed necessitatibus inventore earum quaerat nostrum suscipit nam fugit accusantium molestiae. 
            Quas ab velit laudantium. Ducimus, incidunt natus! Dolor dicta quia accusamus aut, 
            reiciendis voluptatum vel nostrum minus? 
            Unde animi numquam praesentium recusandae enim sequi voluptates dolor tempora ipsam iste officia, 
            sunt molestiae quae dicta, debitis doloribus. 
            Unde impedit incidunt deserunt delectus itaque commodi voluptates, nisi neque!"
        ],
    
        [
            "title" => "Judul Posts Kedua", 
            "slug" =>"judul-post-kedua",
            "author" => "Pason Pount", 
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Quisquam ea asperiores neque ipsum odit tempore sunt sit dicta, pariatur, fugiat, explicabo numquam minus. 
            Fuga aliquid facere ut sed dolor natus sint omnis consequatur, eveniet nemo. Totam dolor perspiciatis, 
            quam voluptatibus minus impedit similique eveniet explicabo laboriosam recusandae tempore velit, aperiam sed quasi? 
            Eaque vel rem consectetur nesciunt amet non consequatur provident laboriosam quasi, 
            veritatis distinctio recusandae deleniti fugit ipsa cum vero? Modi esse porro recusandae atque, 
            maxime dolores exercitationem ipsam quos tenetur a sapiente repellendus harum dolorum ullam at quod sit vero, 
            voluptas commodi iure, blanditiis consectetur. Reprehenderit, esse quia?"
    
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

