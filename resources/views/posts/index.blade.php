@extends('layouts.app')

@section('content')

    <main>

        @if(count($posts))
            <div class="g">
                @foreach($posts as $post)
                    <div class="gg">
                        <a class="btn" href="{{route('posts.show',$post->id)}}">
                            <h1>{{$post->title}}</h1>
                        </a>

                        <p>{{$post->content}}</p>
                    </div>
                @endforeach
            </div>

                @else
        <p>No posts</p>

        @endif
    </main>

@endsection
