@extends('master')

@section('content')
    <div class="posts-bg">
        <div class="container">
            <div class="fs-s"></div>
                @foreach($posts as $single_post)
                <div class="styled-font">
                    <div class="fade-in-sped">
                        <a style="word-break: break-word; text-decoration: none; color: black !important;"
                           href="{{ action('ViewPostController@show',
                            $single_post['id']) }}">
                            <h1 class="header-post hover-change hover-this">
                                {{ $single_post['title'] }}
                            </h1>
                        </a>
                    </div>
                    <div class="fs-s"></div>
                    <div class="fade-in">
                        <div class="hover-underline-animation">
                            <a style="text-decoration: none; color: black !important;"
                               href="{{ action('ViewPostController@show',
                            $single_post['id']) }}">
                            <h3 class="hover-this" style="color: red; margin-top: -10%">{{ $single_post['created_at'] }} by: [username]</h3>
                            </a>
                            <i class="far fa-heart" style="font-size: 150%"></i>
                        </div>
                    </div>
                </div>
                <br><br>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .cursor {
            border: 2px solid red;
            border-radius: 50%;
        }
    </style>

@endsection
