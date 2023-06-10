<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
    <title>@yield('page-title', 'Home')</title>
</head>
<body>

@include('layouts.header')
@yield('banner')
@yield('live_auctions')
@yield('form')
@yield('popular')
@yield('footer')


</body>
</html>
