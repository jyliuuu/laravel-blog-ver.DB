@extends('master')

@section('content')
    <div class="posts-bg">
        <div class="container">
            <div class="fs-s"></div>
                <div class="styled-font">
                    <div class="fade-in-sped">
                        <h1 class="header-post" style="color: red; word-break: break-word;">
                            {{ $postfull[0]->title }}
                        </h1>
                    </div>
                    <div class="fade-in">
                        <div class="text-muted">
                            <h3 style="color: grey; font-size: 150%; margin-top: 2%">{{ $postfull[0]->created_at }} by: [username]</h3>
                        </div>
                    </div>
                    <form action="{{ action('LikesController@update', $postfull[0]->id) }}" method="POST">
                        {{ csrf_field() }}
                    {{--      laravel patch method    --}}
                        <input type="hidden" name="_method" value="PATCH"/>
                        <input type="hidden" name="id" value="{{ $postfull[0]->id }}"/>
                            <button articleID="{{ $postfull[0]->id }}"type="submit" class="hover-underline-animation">
                                <input type="hidden" name="null" value=" ">
                                <h1 class="styled-font hover-this">
                                    <i class="far fa-heart" style="color: red; font-size: 100%"></i>
                                        {{ $postfull[0]->likes }}
                                </h1>
                            </button>
                    </form>
                    <div class="fs-s"></div>
                    <div class="fade-in-delay">
                        <h3 style="word-break: break-word; color: whitesmoke">{{ $postfull[0]->content }}</h3>
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
