@extends('layouts.app')

@section('content')

<div class="flex justify-center">

  <div class="w-4/12 bg-white p-6 rounded-lg">
   
    @if(session('login'))
<div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
  {{session('login')}}
</div>
@endif

    <form action="{{route('login')}}" method="POST">
      @csrf
     
      <div class="mb-4">
        <label class="sr-only" for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">

        @error('email')

        <div class="text-red-500 mt-2 text-sm">
         {{$message}}
        </div>
    @enderror
      </div>

      <div class="mb-4">
        <label class="sr-only" for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">

        @error('password')

        <div class="text-red-500 mt-2 text-sm">
         {{$message}}
        </div>
    @enderror
      </div>

      
      <div>
        <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"  type="submit">Login</button>
      </div>
    </form>
  </div> 
@endsection