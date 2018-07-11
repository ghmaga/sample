<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'LiYLi') - LiYLi 我没法像个农民那样善良，只是麦子还在对着太阳愤怒的生长</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        @include('layouts._header')


        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                @include('shared._messages')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>



    </body>
</html>