@extends('layouts.app')


@section('content')
<div class="flex justify-center">

    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            {{--other way to show errors --}}
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p >{{$error}}</p>
                @endforeach
                @endif
            <div class="mb-4">
                <label class="sr-only"  for="title">Title</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') red @enderror"  type="text" name="title" id="title" value="{{old('title')}}" placeholder="Title">
                @error('title')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr-only"  for="content">Content</label>
                <textarea placeholder="Write somwthing!" class="bg-gray-100 border-2 w-full p-4 rounded-lg   @error('content') red  @enderror" name="content" id="content" cols="30"  rows="10" >
                    {{old('content')}}
                  
                </textarea>
                @error('content')
                <span>{{$message}}</span>
                @enderror
            </div>
           
            <div>
                <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"  type="submit">Create</button>
              </div>
        </form>
    </div>
</div>
@endsection
