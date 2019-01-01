@extends('layouts.app')


@section('content')
<div class='container'>
<h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="card" style='padding:3px'>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3></a>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No posts found</p>
    @endif
    </div>
@endsection

