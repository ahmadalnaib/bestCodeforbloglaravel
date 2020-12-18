@extends('layouts.app')


@section('content')

    <div class="show">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
    </div>
    <div>
        <a class="btn1" href="{{route('posts.index')}}">Back</a>
    </div>
@endsection
