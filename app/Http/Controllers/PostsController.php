<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class PostsController extends Controller
{
    //


public function index() {
// $post = Post::all();
	$posts = Post::orderBy('created_at','desc')->get();
return view('posts.index',compact('posts'));
}


public function show($id)
{

$post = Post::find($id);
return view('posts.show',compact('post'));

}


public function create()

{return view('posts.create');}

   public function store()

   {

Post::create(['title' => request('title'),'body' => request('body')]);
return redirect('/posts');

   }









}
