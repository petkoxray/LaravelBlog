@extends('layouts.layout')

@section('content')
    <div class="col-sm-8">
        @include('layouts.errors')
        <h2>Login</h2>
        <form action="/login" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <button type="submit" class="btn-primary">Register</button>
        </form>
    </div>
@endsection()