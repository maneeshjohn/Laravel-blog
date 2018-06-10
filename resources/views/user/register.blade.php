@extends('layout')

@section('content')

  <div class="col-sm-9 register">

    <h2>Register</h2>

    <form method="POST" action="/register">

      {{ csrf_field() }}

      <div class="form-group">

        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required>

      </div>

      <div class="form-group">

        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>

      </div>

      <div class="form-group">

        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required>

      </div>

      <div class="form-group">

        <label for="password_confirmation">Confirm password:</label>
        <input type="password" name="password_confirmation" class="form-control" required>

      </div>

      <div class="form-group">

        <input type="submit" name="register" value="Register" class="btn btn-primary">

      </div>

    </form>

    @include('partials.error')

  </div>

@endsection