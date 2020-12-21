@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
   
    <form action="{{route('register')}}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="sr-only" for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" @error('name') border-red-500  @enderror class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">
        @error('name')

            <div class="text-red-500 mt-2 text-sm">
             {{$message}}
            </div>
        @enderror
      </div>

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

      <div class="mb-4">
        <label class="sr-only" for="password_confirmation">Password again</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password again" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
      </div>
      <div>
        <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"  type="submit">Register</button>
      </div>
    </form>
  </div> 
@endsection