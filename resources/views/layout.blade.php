<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ URL::asset('assets/js/util.js') }}"></script>
    <script src="{{ URL::asset('assets/js/swipe-content.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>