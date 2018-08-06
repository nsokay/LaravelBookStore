@extends ('layouts.master')

@section ('content')

    <div class="col-sm-12">

        <h1>Register</h1>

        <form action="/register" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection