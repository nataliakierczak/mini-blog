<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap-3.3.7-dist/css/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-3.3.7-dist/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

@include('navigation')

<div class="container">
    @yield('main-content')
</div>

@include('footer')

<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>

<script src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.js')}}"></script>

</body>
</html>