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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('about',function(){return view ('about');});
Route::get('aliados',function(){return view ('aliados');});
Route::get('expositores',function(){return view ('expositores');});
Route::get('equipo',function(){return view ('equipo');});
Route::get('blog',function(){return view ('blog');});
Route::get('participar',function(){return view ('participar');});