@extends('master')

@section('content')
    <div class="fs-s"></div>
    <h1>Welcome back, admin.</h1>
    <p class="text-muted">This is your new dashboard, here you can edit your posts.</p>
    <hr>
    <h4>Create a new blog post.</h4>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('user.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <br>
    <h4>All blog posts.</h4>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
{{--        @foreach($posts as $single_post)--}}
{{--            <tr>--}}
{{--                <td>{{ $single_post['title'] }}</td>--}}
{{--                <td>{{ $single_post['content'] }}</td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection

