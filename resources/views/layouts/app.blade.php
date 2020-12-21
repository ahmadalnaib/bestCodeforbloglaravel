<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Basic app</title>
</head>
<body class="bg-gray-100">
@include('layouts.header')

@if(session('status'))

<div class="flex justify-start status bt-2 mt-2 ">
    <div class="w-4/12 bg-green-200 p-6 rounded-lg">
       
        <p class="text-white-500 mt-2 text-sm">
            {{session('status')}}
        </p>   
       
   </div>
    </div> 
@endif
<div class="container mx-auto mt-6 px-6">

    @yield('content')
</div>

<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
