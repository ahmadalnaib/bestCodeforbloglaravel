@extends('layouts.app')


@section('content')
    <div class="create">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">create post</button>
        </form>
    </div>
@endsection
