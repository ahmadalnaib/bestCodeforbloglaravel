<nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li><a class="p-3" href="{{route('home')}}">Home</a></li>
        <li><a class="p-3" href="{{route('posts.index')}}">Posts</a></li>

       
    </ul>

    <ul class="flex items-center">
        @auth

        <li><a class="p-3" href="">{{auth()->user()->name}}</a></li>
        <li><a class="p-3" href="{{route('posts.create')}}">Create Post</a></li>

        <li><a class="p-3" href="{{route('dashboard')}}">Dashboard</a></li>

        <form class="p-3 inline" action="{{route('logout')}}" method="post">
            @csrf
           <button type="submit">Logout</button>
         </form>
        @endauth

      @guest
      <li><a class="p-3" href="{{route('login')}}">Login</a></li>
      <li><a class="p-3" href="{{route('register')}}">Register</a></li>
      @endguest
        
    </ul>
</nav>
