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

Route::get('/posts/create','PostsController@create');   //going to show the new post form...place a post request.....so it calles the store method....
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');

//routes for comments


Route::get('/post/{post}/comments','CommentsController@store');
//Route::get('/posts/{id}/comments','CommentsController@show');


//routes for basic login and signup...

