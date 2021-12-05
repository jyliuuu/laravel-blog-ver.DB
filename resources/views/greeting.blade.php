<?php

use Illuminate\Support\Facades\Auth;

$email = Auth::user()->email;
$id = Auth::user()->id;
$role = Auth::user()->role_id;
?>
{{ Session::put('user_email', $email) }}
@extends('master')

@section('content')
<div class="main-red">
    <body class="body-s">
        <div class="container">
            <div class="fs-m"></div>
            <div data-background="#63ABFF">
                <div class="fade-in-sped">
                    <h2 class="header-l">Greetings {{ $name = Auth::user()->name }},</h2>
                </div>
                <div class="fade-in">
                    <h1 class="header-center" style="color: black; margin-top: -12px">
                        ready to <p header-center class="hover-underline-animation">level up?</p></h1>
                </div>
                <div class="fade-in-delay">
                    <h1 class="header-center" style="margin-top: -25px">
                        <a href="#new" style="text-decoration: none; color: black !important;"
                           class="hover-underline-animation">
                            Take the next step
                            <a href="https://laravel.com/docs/8.x" style="text-decoration: none; color: black !important;"
                               class="hover-underline-animation">
                                & step up your Laravel.
                            </a>
                        </a>
                    </h1>
                </div>
                <br>
                <div class="fs-m"></div>
                <section class="new" id="new">
                    <div class="fade-in-delay-m">
                        <div class="styled-font">
                            <a href="{{ route('a.posts') }}" class="header-register hover-change-red"><u>$newPost</u></a>
                            <div class="fs-xs"></div>
                            <h4 style="color: black">
                                Let the world hear your voice, or your problems with Laravel..
                            </h4>
                            <div class="fs-s"></div>
                        </div>
                    </div>
                <section class="register" id="register">
                    <div class="styled-font">
                        <a href="{{ route('settings') }}" class="header-register hover-change-red"><u>config.php</u></a>
                        <div class="fs-xs"></div>
                        <h4 style="color: black">
                            project\user\settings\config\...
                        </h4>
                        <div class="fs-s"></div>
                    </div>
                <div class="fs-m"></div>
                <section class="about" id="about">
                    <div class="styled-font">
                        <a href="{{ route('about') }}" class="header-register hover-change-red"><u>about.blade</u></a>
                        <div class="fs-xs"></div>
                        <h4 style="color: black">
                            Learn more about the person behind the code, in the about.blade.php page->!
                        </h4>
                        <div class="fs-s"></div>
                    </div>
                </section>
                <div class="fs-m"></div>
            </div>
        </div>
    </body>
</div>
@endsection
