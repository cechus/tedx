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
Route::get('expositores',function(){return view ('expositores');});
Route::get('equipo',function(){return view ('equipo');});
Route::get('blog',function(){return view ('blog');});
Route::get('participar',function(){return view ('participar');});

Route::group(['middleware' => 'auth'], function () {
       Route::get('/admin', function ()    {
       	return view('adminlte::home');
       // Uses Auth Middleware
   });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('lista_aliados','AliadoController@lista_aliados')->name('lista_aliados');
Route::get('aliado/{idAliado?}','AliadoController@aliado')->name('aliado');
Route::get('eliminar_aliado/{idAliado}','AliadoController@eliminar_aliado')->name('eliminar_aliado');
Route::post('aliado/{idAliado?}','AliadoController@aliado')->name('aliado');
