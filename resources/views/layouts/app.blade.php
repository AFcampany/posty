<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posty</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a class="p-3" href="/">home</a></li>
            <li><a class="p-3" href="{{route('dashbord')}}">Dashboard</a></li>
            <li><a class="p-3" href="{{route('post')}}">post</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li><a class="p-3" href="">{{ auth()->user()->name}}</a></li>
            <li>
                <form class="p-3 inline" action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">logout</button>
                </form>
            </li>

            @endauth
            @guest
            <li><a class="p-3" href="{{ route('login')}}">login</a></li>
            <li><a class="p-3" href="{{ route('register')}}">register</a></li>
            @endguest

        </ul>
        

    </nav>
    @yield('content')
</body>
</html>