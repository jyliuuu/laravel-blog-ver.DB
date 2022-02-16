@extends('master')

@section('content')
    <div class="posts-bg">
        <div class="container">
            <div class="fs-s"></div>
            <form action="{{ url('search') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="POST" />
                <div class="form-group">
                    <div class="row">
                        <label for="title" style="display: block">Title</label>
                        <input type="text" name="title" class="form-control"
                            style="color: red; background-color: black; border-color: black"
                            placeholder="Enter post title.">
                        <input type="submit" class="btn-sm hover-this btn-danger">Search</input>
                    </div>
                </div>
                <div class="fs-s"></div>
            </form>
            @foreach ($postsfull as $single_post)
                <div class="styled-font">
                    <div class="fade-in-sped">
                        <a style="word-break: break-word; text-decoration: none; color: black !important;"
                            href="{{ action('ViewPostController@show', $single_post->id) }}">
                            <h1 class="header-post hover-change hover-this">
                                {{ $single_post->title }}
                            </h1>
                        </a>
                    </div>
                    <div class="fs-s"></div>
                    <div class="fade-in">
                        <div class="hover-underline-animation">
                            <a style="text-decoration: none; color: black !important;"
                                href="{{ action('ViewPostController@show', $single_post->id) }}">
                                <h3 class="hover-this" style="color: red; margin-top: -10%">
                                    {{ $single_post->created_at }} by: [username]
                                </h3>
                            </a>
                            <h1>{{ $single_post->likes }} <i class="far fa-heart" style="font-size: 90%"></i></h1>
                        </div>
                    </div>
                </div>
                <br><br>
            @endforeach
            <span>
                {{ $postsfull->links() }}
            </span>
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
