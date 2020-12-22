@extends('layouts.app')


@section('content')

    <div class="show">


        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

    </div>
    <div>
        <a class="text-blue-500" href="{{route('posts.index')}}">Back</a>
          @if($post->owndBy(auth()->user()))
        <a class="text-red-500" href="{{route('posts.delete',$post)}}">Delete</a>
        @endif
        
    </div>
@endsection
