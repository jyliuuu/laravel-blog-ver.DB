@extends('master')

@section('content')
    <div class="posts-bg">
        <div class="container">
            <div class="fs-s"></div>
                <div class="styled-font">
                    <div class="fade-in-sped">
                        <a style="text-decoration: none; color: black !important;"
                           href="{{ action('PostController@view',
                            $post['id']) }}">
                            <h1 class="header-post hover-change">
                                {{ $post['title'] }}
                            </h1>
                        </a>
                    </div>
                    <div class="fade-in">
                        <div class="hover-underline-animation">
                            <a style="text-decoration: none; color: black !important;"
                               href="{{ action('PostController@view',
                            $post['id']) }}">
                                <h3 style="color: red; margin-top: -10%">{{ $post['created_at'] }} by: [username]</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
        </div>
    </div>
    </div>

@endsection
