<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    // TODO: Image...
    public function store(){
        if(request('posted') == "on")
            $pub = 1;
        else
            $pub = 0;

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'date' => '2016-03-03 00:00:00',
            'posted' => $pub,
            'image' => request('image')
        ]);

        return redirect('/administrador/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
