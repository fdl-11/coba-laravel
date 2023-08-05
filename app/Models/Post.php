<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fadli D",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste natus doloremque nemo aliquam enim et neque, nesciunt ducimus aliquid nostrum quasi rerum quia voluptatum perspiciatis, velit animi cupiditate unde reprehenderit repudiandae aspernatur? Minus explicabo numquam totam corrupti vel alias odit consequuntur, debitis laudantium quam molestiae laborum consectetur reiciendis tempore ea pariatur eum nam exercitationem. Veniam sapiente beatae, natus suscipit exercitationem molestias eligendi qui quaerat saepe dolor quisquam excepturi optio, iste labore. Nisi deleniti voluptatum iure reiciendis, iste provident quae nam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Firmino",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste natus doloremque nemo aliquam enim et neque, nesciunt ducimus aliquid nostrum quasi rerum quia voluptatum perspiciatis, velit animi cupiditate unde reprehenderit repudiandae aspernatur? Minus explicabo numquam totam corrupti vel alias odit consequuntur, debitis laudantium quam molestiae laborum consectetur reiciendis tempore ea pariatur eum nam exercitationem. Veniam sapiente beatae, natus suscipit exercitationem molestias eligendi qui quaerat saepe dolor quisquam excepturi optio, iste labore. Nisi deleniti voluptatum iure reiciendis, iste provident quae nam."
        ]
    ];

    public static function all()
    {
        # pakai $this->$blog_posts kalau properti biasa. Karna properti static, maka pakai self::
        return collect(self::$blog_posts);   
    }

    public static function find($slug)
    {
        # ambil semua posts-nya, lalu looping satu-satu sebagai variabel p
        # kalau ketemu slug yg sama dengan parameter yang dikirim, maka dimasukkan ke $post
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        
        # ambil semua data dari collections
        $posts = static::all();
        # return data dengan method firstWhere, dengan mencocokkan slug & parameter $slug yg di panggil
        return $posts->firstWhere('slug', $slug);
    }
}
