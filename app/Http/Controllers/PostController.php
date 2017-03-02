<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Post;
use App\Tag;
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
        date_default_timezone_set('UTC');


        $post=new Post();
        $post->title=request('title');
        $post->description=request('description');
        $post->date="2017-09-09 00:00:00";
        $post->image="/dujdsujsuj";
        /*if (!empty(request('image'))) {
                $ext = $request->file('image')->getClientOriginalExtension();
                $nombre_uui = uniqid('', true);
                if ($request->file('image')->move('images/posts', "$nombre_uui.$ext")) {
                    if (!empty($post->image)) {
                        $directo = public_path()  . '/images/posts/' . $post->image;
                        if (file_exists($directo)) {
                            unlink($directo);
                        }
                    }
                    $post->image = "$nombre_uui.$ext";
                }
            }
            else{
            }*/
        
        $post->save();
        DB::table('post_tag')->insert([
            'tag_id' => $request->tags,
            'post_id' => $post->id
        ]);
        return redirect('post');
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
