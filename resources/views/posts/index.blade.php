@include('layouts.app')

index page of posts


@foreach ($posts as $post)

@include('posts.article')
          

@endforeach