@extends('master')

@section('content')
    <div class="fs-s"></div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="header">Edit post.</h1>
            <p>You're here to edt a post, go ahead, change the format.</p>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ action('PostController@update', $id) }}" method="POST">
                {{ csrf_field() }}
{{--                laravel patch method    --}}
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"
                           value="{{ $post->title}}" placeholder="Enter post title.">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" name="content"
                           value="{{ $post->content}}" placeholder="Enter content here.">
                </div>

                <input type="submit" class="btn btn-warning" value="Edit"/>
            </form>
        </div>
    </div>
@endsection
