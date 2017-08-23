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

Route::get('/home', 'HomeController@index')->name('home');

//routes for posts

Route::get('/posts','PostsController@index');

Route::get('/posts/{post}','PostsController@show');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::patch('/posts/{post}','PostsController@update');

Route::delete('/posts/{id}','PostsController@delete');



//routes for comments


Route::get('/post/{id}/comments/create','CommentsController@create');
Route::get('/posts/{id}/comments','CommentsController@show');


//routes for basic login and signup...

