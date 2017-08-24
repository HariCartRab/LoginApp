<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{

public function store(Post $post){


$post->addComment(request('comment'));

// Comment::create([
// 'body' => request('comment'),
// 'post_id' => $post->id

// 	]);

return back();

}
}
