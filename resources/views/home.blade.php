@extends('master')

@section('content')
<div class="main-red">
    <div class="container">
        <div class="fs-m"></div>
        <div data-background="#63ABFF">
            <div class="fade-in-sped">
                <h2 class="header-l">LaraBlogs</h2>
            </div>
            <div class="fade-in">
                <h1 class="header-center" style="color: black; margin-top: -12px">
                Welcome to <span style="color: red"
                >LaraBlogs</span></h1>
            </div>
            <div class="fade-in-delay">
                <h1 class="header-center" style="margin-top: -25px">
                    <a href="{{route('user.posts')}}" style="text-decoration: none; color: black !important;"
                       class="hover-underline-animation hover-this">
                        let's interact w/ others
                        <a href="https://laravel.com/docs/8.x" style="text-decoration: none; color: black !important;"
                           class="hover-underline-animation hover-this">
                            studying Laravel.
                        </a>
                    </a>
                </h1>
            </div>
            <br>
            <div class="fade-in-delay-m">
                <h1 class="header-center" style="margin-top: -25px; font-size: 450%">
                    <a href="#one" style="text-decoration: none; color: black !important;"
                       class="hover-underline-animation hover-this">
                        Let's go!
                    </a>
                </h1>
            </div>
        </div>
        <div class="fs-l"></div>
        <div class="styled-font">
            <div class="fade-in-sped">
                <br>
                <div class="one" id="one">
                <h1 style="color: black; font-size: 400%; letter-spacing: -3px;">
                    One & only.
                </h1>
                </div>
            </div>
            <h4 style="color: black">
                The one and only platform you'll ever need for your Laravel journey.
                <br>
                <span style="color: black">LaraBlog</span> offers you to be able to connect with millions of others, doing the same thing:
            </h4>
            <h1 class="header-laravel hover-change-red">Studying Laravel.</h1>
            <div class="fs-xs"></div>
            <h1 class="header-l" style="font-family: 'Distancia Regular'; color: black">"</h1>
            <h4 class="text-center" style="color: white">
                Is it worth learning Laravel? <span style="color: black">Yes, it is for sure.</span><br>
                Laravel is widely used in today's companies because <br>it is able to drastically reduce development times,
                and this need never gets old. <br>So if you want to advance your career as a PHP developer you better learn Laravel!
            </h4>
            <h1 class="header-r" style="font-family: 'Distancia Regular'; color: white">"</h1>
            <h5 class="text-center">
                <u>
                    <a href="https://www.polynique.com/web-development/what-is-laravel-and-why-you-should-learn-it/"
                       class="hover-this" style="color: black !important;">
                        Source: www.polynique.com
                    </a>
                </u>
            </h5>
            @if (Auth::check())
                <div class="fs-m"></div>
                <section class="about" id="about">
                    <div class="styled-font">
                        <a href="{{ route('about') }}" class="hover-this header-register hover-change-red"><u>about.blade</u></a>
                        <div class="fs-xs"></div>
                        <h4 style="color: black">
                            Learn more about the person behind the code, in the about.blade.php page->!
                        </h4>
                        <div class="fs-s"></div>
                    </div>
                </section>
                <div class="fs-l"></div>
            @else
            <section class="register" id="register">
                <div class="fs-s"></div>
                <a href="{{ route('register') }}" class="hover-this header-register hover-change-red"><u>Register.</u></a>
                <div class="fs-xs"></div>
                <h4 style="color: black">
                    Wait no more, and start your Laravel profession today.
                </h4>
                <div class="fs-s"></div>
                <a href="{{ route('login') }}" class="hover-this header-register hover-change-red"><u>Login.</u></a>
                <div class="fs-xs"></div>
                <h4 style="color: black">
                    Already have an account? Wait no more, and chat away.
                </h4>
                <div class="fs-s"></div>
            </section>
            @endif
        </div>
    </div>
</div>
@endsection
