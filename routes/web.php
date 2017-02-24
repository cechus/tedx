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
Route::get('aliados','AliadoController@aliados')->name('aliados');
Route::get('expositores',function(){return view ('expositores');});
Route::get('equipo',function(){return view ('equipo');});
Route::get('blog',function(){return view ('blog');});
Route::get('participar',function(){return view ('participar');});

//PARA EL ADMINISTRADOR
/*Route::get('aliado','AliadoController@aliado');
Route::post('aliado','AliadoController@aliado');*/

Route::match(['get', 'post'], 'aliado/{idAliado?}', 'AliadoController@aliado')->name('aliado');
Route::get('lista_aliados','AliadoController@lista_aliados')->name('lista_aliados');
Route::get('eliminar_aliado/{idAliado}','AliadoController@eliminar')->name('eliminar_aliado');


Route::get('admin','AdminController@index')->name('admin');