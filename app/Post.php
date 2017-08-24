<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Comment;



class Post extends Model
{
    //for mass assignments.....
protected $fillable = ['title','body'];

//to show the relationship between..........



//post and user    user has many post...post belongsto a user

public function user()
{
return $this->belongsTo(User::class);

}


//post and comment    post has many comments....or comment belongs to a post...

public function comments(){
return $this->hasMany(Comment::class);}


public function addComment($body)   //called by addcomment in commentscontroller...
{$this->comments()->create(compact('body'));}

// Comment::create([

// 'post_id' => $this->id,
// 'body' => $body



// 	]);

}




/*
class Post extends Model
{
    //content for mass assignment.......

protected $fillable = ['title','body'];

//if  u dont want to allow and fileds for this...use protected $guarded = ['user_id'];

public function comments()
{
return $this->hasMany(Comment::class);
//also   return $this->hasMany('App\Comment');


}

public function addComment($body)
{

$this->comments()->create(compact('body'));

// Comment::create([

// 'post_id' => $this->id,
// 'body' => $body



// 	]);

}


public function user()   //get user who crtd the post
{

return $this->belongsTo(User::class);

}




}

*/