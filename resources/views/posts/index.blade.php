

@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="card card-body bg-light"> 
         <h3><a href='http://localhost/blog/public/posts/{{$post->id}}'>{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>   
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection