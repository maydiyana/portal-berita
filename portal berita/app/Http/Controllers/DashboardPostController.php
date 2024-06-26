<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'catagories' => Catagory::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required | max:100',
            'catagory_id' => 'required ',
            'slug' => 'required | max:100',
            'body' => 'required',
            'image' => 'image|file|max:5024'

        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }
        $validateData['user_id'] = auth()->user()->id;
        $validateData['exc'] = Str::limit(strip_tags($request->body), 100);
        Post::create($validateData);

        return redirect('/dashboard/posts')->with('succes', 'Yeayyy, Ur post hash been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'catagories' => Catagory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required | max:100',
            'catagory_id' => 'required ',
            'body' => 'required',
        ];
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validateData = $request->validate($rules);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['exc'] = Str::limit(strip_tags($request->body), 100);

        Post::where('id', $post->id)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('succes', 'Ur post hash been Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('succes', 'Post hash been delete');
    }
}
