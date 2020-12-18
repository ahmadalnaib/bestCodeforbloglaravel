@extends('layouts.app')


@section('content')
    <div class="home">
        <p>Welcome to ..</p>
        <div>
            <a class="btn1" href="{{route('posts.index')}}">our last posts</a>
        </div>
    </div>

@endsection
