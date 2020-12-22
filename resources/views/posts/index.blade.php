@extends('layouts.app')

@section('content')

    <main>

        @if($posts->count())
            <div class="g">
                @foreach($posts as $post)
                <div class="flex-job">
                        <div class="flex-item p-2 border-b-2 rounded-b-sm">
                        <a class="btn" href="{{route('posts.show',$post)}}">
                            <h1>{{$post->title}}</h1>
                        </a>
                        
                        <small>{{$post->created_at}}</small>
                        <a class="bg-green-200 text-grey px-6 py-1 rounded font-medium " href="{{route('posts.show',$post)}}">Apply</a>
                    </div>
                    </div>
                @endforeach
            </div>
       {{$posts->links()}}
                @else
        <p>No posts</p>

        @endif


    </main>




@endsection
