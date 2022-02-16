<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My first Laravel project</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::to('css/text-animations.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/cursor.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/jquery.scrollie.min.js"></script>

<body class="antialiased">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/659125de6b.js" crossorigin="anonymous"></script>

{{--fonts--}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant&family=Spectral:wght@500&display=swap" rel="stylesheet">
{{--@include('layouts.navigation')--}}
@if (Auth::check())
        @include('layouts.navigation')
@else
        @include('layouts.guest-navigation')
@endif
    @yield('content')
</body>
</html>
<div class="cursor"></div>
<script>
    AOS.init();
</script>

<script src="{{ URL::to('js/session_like.js') }}"></script>
<script src="{{ URL::to('js/cursor.js') }}"></script>
<script src="{{ URL::to('js/card.js') }}"></script>
