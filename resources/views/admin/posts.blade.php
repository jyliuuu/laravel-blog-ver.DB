@extends('master')

@section('content')
<div class="container">
    <div class="fs-s"></div>
    <body>
        <h1>Welcome back, admin.</h1>
        <p class="text-muted">This is your new dashboard, here you can edit your posts.</p>
        <hr>
        <h4>All blog posts.</h4>
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{\Session::get('success') }}</p>
            </div>
        @endif
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Creation date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            @foreach($posts as $single_post)
                <tr>
                    <td>{{ $single_post['title'] }}</td>
                    <td>{{ $single_post['content'] }}</td>
                    <td>{{ $single_post['created_at'] }}</td>
                    <td><a href="{{ action('PostController@edit',
                        $single_post['id']) }}"
                           class="btn btn-warning hover-this">Edit</a></td>
                    <td>
                        <form method="post" action="{{ action('PostController@destroy',
                        $single_post['id']) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="Delete"/>
                            <div class="hover-this">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
            <tbody>

            </tbody>
        </table>
        <h4>Create a new blog post.</h4>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.create') }}" class="btn btn-success hover-this">New Post</a>
            </div>
        </div>
        </body>
    </div>
</div>
@endsection

