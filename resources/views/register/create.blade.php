@extends('layouts.layout')

@section('content')
    <div class="col-sm-8">
        @include('layouts.errors')
        <h2>Register</h2>
        <form action="/register" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Repeat password:</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit" class="btn-primary">Register</button>
        </form>
    </div>
@endsection()