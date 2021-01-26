<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('titolo')</title>
    </head>
    <body>
        <header>
            <ul>
                @foreach(config('main.routes') as $route)
                <li style="display: inline-block;"><a href="{{ route($route['pathId']) }}">{{$route['displayText']}}</a></li>
                @endforeach
            </ul>
            <div class="container">
                @yield('content')
            </div>
        </header>
    </body>
</html>
