show page of comments...see comments controller.....call is from post controller....

@foreach ($post->comments as $comment)
{{ $comment->created_at->diffForHumans() }}

{{ $comment->body }}
@endforeach
<form method="POST" action="/posts/{{ $post->id }}/comments">    <!--/comments-->
  {{ csrf_field() }}

  <div class="form-group">
    <label for="Comment">Title</label>
    <input type="text" class="form-control" name="comment" >
  </div>
  
 
  <button type="submit" class="btn btn-success">Publish it</button>
</form>


<!-- {{ $comment->body}}


@foreach ($post->comments as $comment)
{{ $comment->created_at->diffForHumans() }}

{{ $comment->body }}
@endforeach -->