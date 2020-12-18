@extends('layouts.app')


@section('content')
    <div class="create">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            {{--other way to show errors --}}
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
                @endif
            <div>
                <label for="title">Title</label>
                <input class="@error('title') red @enderror"  type="text" name="title" id="title" value="{{old('title')}}">
                @error('title')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="content">Content</label>
                <textarea class="@error('content') red  @enderror" name="content" id="content" cols="30" rows="10">
                    {{old('content')}}
                </textarea>
                @error('content')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                <span>{{$message}}</span>
                @enderror
            </div>
            <button type="submit">create post</button>
        </form>
    </div>
@endsection
