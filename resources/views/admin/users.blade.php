@extends('master')

@section('content')
    <div class="fs-s"></div>
    <body>
    <h1>Welcome back, admin.</h1>
    <p class="text-muted">This here is your "user management" screen.</p>
    <hr>
    <h4>All users</h4>
    @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success') }}</p>
        </div>
    @endif
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Full name</th>
            <th scope="col">Email</th>
            <th scope="col">Creation date</th>
            <th scope="col">Role</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['created_at'] }}</td>
                <td></td>
                <td><a href="{{ action('UserController@edit',
                        $user['id']) }}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form method="post" action="{{ action('PostController@destroy',
                        $user['id']) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="Delete"/>
                        <button type="submit" class="btn btn-danger"/>Delete</form>
                    </form>
                </td>
            </tr>
        @endforeach
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection

