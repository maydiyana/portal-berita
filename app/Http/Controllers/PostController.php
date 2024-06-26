<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Post::latest()->filter(request(['search', 'catagory', 'authors']))->paginate(7)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "spost",
            "post" => $post
        ]);
    }
}
