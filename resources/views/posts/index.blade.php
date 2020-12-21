@extends('layouts.app')

@section('content')

    <main>

        @if($posts->count())
            <div class="g">
                @foreach($posts as $post)
                    <div class="gg">
                        <a class="btn" href="{{route('posts.show',$post)}}">
                            <h1>{{$post->title}}</h1>
                        </a>


                        <small>{{$post->created_at}}</small>
                    </div>
                @endforeach
            </div>
       {{$posts->links()}}
                @else
        <p>No posts</p>

        @endif


    </main>

@endsection
