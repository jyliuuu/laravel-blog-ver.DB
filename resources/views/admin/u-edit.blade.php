@extends('master')

@section('content')
<div class="fs-s"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="header">Edit post.</h1>
            <p>You're here to edit a user, go ahead, change the them.</p>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ action('UserController@update', $id) }}" method="POST">
                {{ csrf_field() }}
                {{--                laravel patch method    --}}
                <input type="hidden" name="_method" value="PATCH"/>
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" name="name"
                           value="{{ $users->name}}" placeholder="Enter user's name.">
                </div>
                <div class="form-group">
                    <label for="mail">User email</label>
                    <input type="text" class="form-control" name="mail"
                           value="{{ $users->email}}" placeholder="Enter new mail here.">
                </div>
                <div class="form-group">
                    <label for="role">Roles</label>
                    <select class="form-control" id="exampleFormControlSelect1"
                            name="role" id="role" required>
                        <option disabled="true" selected value> // select an option // </option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    <p class="text-muted">It is <strong>not</strong> recommended to demote your own role, during login.</p>
                </div>
    {{--                <div class="form-group">--}}
    {{--                    <label for="role">Role</label>--}}
    {{--                    <input type="text" class="form-control" name="role"--}}
    {{--                           value="{{ $user->role}}" placeholder="Enter content here.">--}}
    {{--                </div>--}}

                <input type="submit" class="btn btn-warning" value="Edit"/>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
