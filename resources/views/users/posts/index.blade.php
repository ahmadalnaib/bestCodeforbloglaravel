@extends('layouts.app')

@section('content')

    <main>
        <h1 class="text-lg font-medium mb-6">{{$user->name}} posts {{$posts->count()}}</h1>
        @if($posts->count())
            <div class="g">
                @foreach($posts as $post)
                <div class="flex-job">
                        <div class="flex-item p-2 border-b-2 rounded-b-sm">

                        <a class="btn" href="{{route('posts.show',$post)}}">
                            <h1>{{$post->title}}</h1>
                        </a>
                        
                        <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>

                        <a class="bg-green-200 text-grey px-6 py-1 rounded font-medium " href="{{route('posts.show',$post)}}">Apply</a>
                         
                        <span class="text-gray-600">
                          {{$post->user->name}}
                        </span>
                    </div>
                    </div>
                @endforeach
            </div>
            <div class="m-3 p-3">

                {{$posts->links()}}
            </div>
                @else
                <div class="w-6/12 bg-white p-6 rounded-lg">
                    <p>There are no posts</p>
                </div>

        @endif


    </main>




@endsection
