@extends('master')

@section('content')
    <div class="posts-bg">
        <div class="container">
            <div class="fs-s"></div>
                <div class="styled-font">
                    <div class="fade-in-sped">
                        <h1 class="header-post" style="color: red; word-break: break-word;">
                            {{ $post['title'] }}
                        </h1>
                    </div>
                    <div class="fade-in">
                        <div class="hover-underline-animation">
                            <h3 class="hover-this" style="color: grey; font-size: 150%; margin-top: -10%">{{ $post['created_at'] }} by: [username]</h3>
                        </div>
                    </div>
                    <div class="fade-in-delay">
                        <h3 style="word-break: break-word; color: whitesmoke">{{ $post['content'] }}</h3>
                    </div>
                </div>
                <br>
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
