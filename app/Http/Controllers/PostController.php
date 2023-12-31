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
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;
        }

        return view('posts', [
            "title" => "All Post".$title,
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    # Controller setiap post
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    # Controller about
    public function about()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Fadli Darusalam",
            "email" => "fadlidarusalam11@gmail.com",
            "image" => "firmino.jpg"
        ]);
    }

    # Controller home
    public function home()
    {
        return view('home', [
            "active" => "home",
            "title" => "Home"
        ]);
    }

    # Controller Categories
    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            "active" => "categories",
            'categories' => Category::all()
        ]);
    }

    // public function category(Category $category)
    // {
    //     return view('posts', [
    //         'title' => "Post by Category : $category->name",
    //         "active" => "categories",
    //         'posts' => $category->posts->load(['category', 'author'])
    //     ]);
    // }

    // # Controller author
    // public function author(User $author)
    // {
    //     return view('posts', [
    //         'title' => "Post by Author : $author->name",
    //         'active' => "posts",
    //         'posts' => $author->posts->load(['category', 'author'])     // load = lazy eager loading
    //     ]);
    // }
}
