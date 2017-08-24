<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Post;


class Comment extends Model
{
    //mass assignments
    protected $fillable = ['post_id','body'];



//comment belongs to a post


	public function post()
	{return $this->belongsTo(Post::class);}


	//comment belongs to a user....

	public function user()
	{return $this->belongsTo(User::class);}

}

/*protected $fillable = ['post_id','body'];

    //belogs to a ppost right....so if i have a comment and want to find which post....\

public function post()

{
	return $this->belongsTo(Post::class);
}

public function user() //to get the user who crtd the comment...
{

return $this->belongsTo(User::class);

}*/