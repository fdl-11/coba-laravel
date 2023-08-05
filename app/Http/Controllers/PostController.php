<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    # Controller halaman blog
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    # Controller setiap post
    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }

    # Controller about
    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Fadli Darusalam",
            "email" => "fadlidarusalam11@gmail.com",
            "image" => "firmino.jpg"
        ]);
    }

    # Controller home
    public function home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }
}
