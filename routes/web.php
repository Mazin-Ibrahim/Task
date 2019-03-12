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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/OnePost/{id}','PostController@OnePost')->name('OnePost');
Route::get('/AllPost','PostController@AllPost')->name('AllPost');
Route::get('/del/{id}','PostController@del')->name('del');
Route::post('/Comment','PostController@Comment')->name('Comment');
Route::resource('products','ProductController');
Route::resource('users','UserController');
Route::resource('posts','PostController');
Route::get('/home', 'HomeController@index')->name('home');
