<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('about',function(){return view ('about');});
Route::get('aliados','AliadoController@aliados')->name('aliados');
Route::get('expositores','SpeakerController@index');
Route::get('equipo',function(){return view ('equipo');});
Route::get('participar',function(){return view ('participar');});

Route::group(['middleware' => 'auth'], function () {
       Route::get('/admin', function ()    {
       	return view('adminlte::home');
       // Uses Auth Middleware
   });

});

Use App\Tag;
Use App\Post;
Route::get('test',function ()
{
	$t=Post::find(1)->tags()->get()->toArray();
	dd($t);
});

/**post **/
Route::resource('posts','PostController');
//Route::get('blog',function(){return view ('blog');});
//Route::resource('blog','BlogController');
Route::get('/posts/tag/{tag}','TagController@index');
Route::post('/posts/{post}/comments','CommentController@store');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
