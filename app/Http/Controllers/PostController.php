<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "Home",
            "active" => 'home'
        ]);
    }
    
    public function index()
    {   
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        };

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view("posts", [
            "title" => 'All Post ' . $title,
            "active" => 'posts',
            "posts" => Post::filter(request(['search', 'category', 'author']))->latest()
            ->paginate(7)->withQueryString()
        ]); 
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
