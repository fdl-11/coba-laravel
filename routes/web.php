<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fadli Darusalam",
        "email" => "fadlidarusalam11@gmail.com",
        "image" => "firmino.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});