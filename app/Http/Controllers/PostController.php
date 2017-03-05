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
    /*public function store(Request $request)
    {
        /*$post=new Post();
        $post->title=request('title');
        $post->description=request('description');
        $post->date=Carbon::now();
        if ($request->hasFile('image')) {
           $extension = $request->image->extension();
            //$path=$request->image->store('photos');
            $path='filename'.Carbon::now()->timestamp.'.'.$extension;
            $request->image->move(public_path('posts'), $path);

            //$path=$request->image->store('photosfilename'.Carbon::now()->timestamp.'.'.$extension);
            $post->image=$path;
        }else{
            echo "No hay Imagen";
        }
        $post->save();
        DB::table('post_tag')->insert([
            'tag_id' => $request->tags,
            'post_id' => $post->id
        ]);
        return;
        return redirect('posts');
    }
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $date=Carbon::parse($post->date)->toFormattedDateString();
        return view('post.show',compact('post','date'));
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


    public function post(Request $request, $idPost = null)
    {
        $tags_us = [];
        if (!empty($request->all())) {
            //dd($request->all());
            if (!empty($request->id)) {
                $post = Post::find($request->id);
            } else {
                $post = new Post();
            }
            if (!empty($request->file('archivo'))) {
                $ext = $request->file('archivo')->getClientOriginalExtension();
                $nombre_uui = uniqid('', true);
                if ($request->file('archivo')->move('img_posts', "$nombre_uui.$ext")) {
                    if (!empty($post->imagen)) {
                        $directo = public_path()  . '/img_posts/' . $post->imagen;
                        if (file_exists($directo)) {
                            unlink($directo);
                        }
                    }
                    $post->image = "$nombre_uui.$ext";
                }
            }


            $post->title = $request->title;
            $post->description = $request->description;
            $post->date = date("Y--m-d H:i:s");
            $post->save();
            $post->tags()->sync($request->tags);


            //Flash::success('Se ha guardado correctamente los el logo!!');
//            return redirect()->back();
            return redirect('lista_posts');
        } else {
            if(!empty($idPost)){
                $post = Post::find($idPost);
                $tags_us = $post->tags->pluck('id','id')->all();
            }

        }
        $tags = Tag::get()->pluck('name', 'id')->all();
        //dd($tags);
        return view('administrador.post')->with(compact('post','tags','tags_us'));
    }
    public function lista_posts()
    {
        $lista_posts = Post::get();
        return view('administrador.lista_posts')->with(compact('lista_posts'));
    }

    public function eliminar_post($idPost){
        $post = Post::find($idPost);
        if (!empty($post->image)) {
            $directo = public_path()  . '/img_posts/' . $post->image;
            if (file_exists($directo)) {
                unlink($directo);
            }
        }
        $post->tags()->sync([]);
        $post->delete();
        return redirect()->back();
    }
}
