<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=Post::latest()
            ->filter(request(['month','year']))
            ->get();
        $archives=Post::archives();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        return view('post.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title=request('title');
        $post->description=request('description');
        $post->date=Carbon::now();
        if ($request->hasFile('image')) {
            $extension = $request->image->extension();    
            $path=$request->image->store(storage_path().'/images/filename'.Carbon::now()->timestamp.'.'.$extension);
            //$path=$request->image->storeAs(public_path().'/images/posts', 'filename'.Carbon::now()->timestamp.'.'.$extension);
            $post->image=$path;
        }else{
            echo "NOOsia hat";
        }
        
        $post->save();
        DB::table('post_tag')->insert([
            'tag_id' => $request->tags,
            'post_id' => $post->id
        ]);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
