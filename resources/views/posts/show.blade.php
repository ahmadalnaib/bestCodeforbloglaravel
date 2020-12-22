@extends('layouts.app')


@section('content')
<a class="text-blue-500 bg-blue-200 py-1 px-3" href="{{route('posts.index')}}">Back</a>
    <div class="show">


        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

    </div>
    <div>
       

          {{-- @if($post->owndBy(auth()->user())) --}}
          @can('delete',$post)

          <form action="{{route('posts.delete',$post)}}" method="POST">
            @csrf
            @method('DELETE')
             <button class="bg-red-500 text-white py-1 px-3" type="submit">Delete</button>
          </form>
      @endcan
        {{-- @endif --}}
        
    </div>
@endsection
