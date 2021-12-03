@extends('master')

@section('content')
<div class="main">
    <div class="container">
        <div class="fs-m"></div>
        <div data-background="#63ABFF">
            <div class="fade-in-sped">
                <h2 class="header-l">LaraBlogs</h2>
            </div>
            <div class="fade-in">
                <h1 class="header-center" style="color: black; margin-top: -12px">
                    Welcome to <p header-center class="hover-underline-animation">LaraBlogs</p></h1>
            </div>
            <div class="fade-in-delay">
                <h1 class="header-center" style="margin-top: -25px">
                    <a href="{{route('user.posts')}}" style="text-decoration: none; color: black !important;"
                       class="hover-underline-animation">
                        let's interact w/ others
                        <a href="https://laravel.com/docs/8.x" style="text-decoration: none; color: black !important;"
                           class="hover-underline-animation">
                            studying Laravel.
                        </a>
                    </a>
                </h1>
            </div>
            <br>
            <div class="fade-in-delay-m">
                <h1 class="header-center" style="margin-top: -25px; font-size: 450%">
                    <a href="#one" style="text-decoration: none; color: black !important;"
                       class="hover-underline-animation">
                        Let's go!
                    </a>
                </h1>
            </div>
        </div>
        <div class="fs-l"></div>
        <div class="styled-font">
            <div class="fade-in-sped">
                <section class="one" id="one">
                <h1 class="text-white" style="font-size: 400%; letter-spacing: -3px;">
                    One & only.
                </h1>
                </section>
            </div>
            <h4 style="color: white">
                The one and only platform you'll ever need for your Laravel journey.
                <br>
                <span style="color: red">LaraBlog</span> offers you to be able to connect with millions of others, doing the same thing:
            </h4>
            <h1 class="header-laravel hover-change">Studying Laravel.</h1>
            <div class="fs-xs"></div>
            <h1 class="header-l" style="font-family: 'Distancia Regular'; color: white">"</h1>
            <h4 class="text-center" style="color: white">
                Is it worth learning Laravel? <span style="color: red">Yes, it is for sure.</span><br>
                Laravel is widely used in today's companies because <br>it is able to drastically reduce development times,
                and this need never gets old. <br>So if you want to advance your career as a PHP developer you better learn Laravel!
            </h4>
            <h1 class="header-r" style="font-family: 'Distancia Regular'; color: white">"</h1>
            <h5 class="text-center">
                <u>
                    <a href="https://www.polynique.com/web-development/what-is-laravel-and-why-you-should-learn-it/"
                       style="color: red !important;">
                        Source: www.polynique.com
                    </a>
                </u>
            </h5>
            <section class="register" id="register">
                <div class="fs-s"></div>
                <a href="{{ route('register') }}" class="header-register hover-change"><u>Register.</u></a>
                <div class="fs-xs"></div>
                <h4 style="color: red">
                    Wait no more, and start your Laravel profession today.
                </h4>
                <div class="fs-s"></div>
                <a href="{{ route('login') }}" class="header-register hover-change"><u>Login.</u></a>
                <div class="fs-xs"></div>
                <h4 style="color: red">
                    Already have an account? Wait no more, and chat away.
                </h4>
                <div class="fs-s"></div>
            </section>
        </div>
    </div>
</div>
@endsection
