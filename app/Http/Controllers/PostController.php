<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    # Controller halaman blog
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    # Controller setiap post
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
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

    # Controller Categories
    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }

    # Controller author
    public function author(User $author)
    {
        return view('posts', [
            'title' => 'User Post',
            'posts' => $author->posts
        ]);
    }
}
