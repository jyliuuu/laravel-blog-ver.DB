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
                        <div class="text-muted">
                            <h3 style="color: grey; font-size: 150%; margin-top: 2%">{{ $post['created_at'] }} by: [username]</h3>
                        </div>
                    </div>
                    <form action="{{ action('UserController@update', $post['id']) }}" method="POST">
                        {{ csrf_field() }}
                        {{--                laravel patch method    --}}
                        <input type="hidden" name="_method" value="PATCH"/>
                            <button type="submit" class="hover-underline-animation">
                                <h1 class="styled-font hover-this">
                                    <i class="far fa-heart" style="color: red; font-size: 100%"></i>
                                    Give it a like!</h1>
                            </button>
                    </form>
                    <div class="fs-s"></div>
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
