@extends('layout')

@section('content')

  <div class="col-sm-9 login">

    <h2>Login</h2>

    <form method="POST" action="/login">

      {{ csrf_field() }}

      <div class="form-group">

        <label for="email">Email address :</label>
        
        <input type="email" class="form-control" name="email" required>

      </div>

      <div class="form-group">

        <label for="password">Password :</label>

        <input type="password" class="form-control" name="password" required>

      </div>

      <div class="form-group">

        <input type="submit" name="login" value="Login" class="btn btn-primary">

      </div>

    </form>

    <h6>Not a member? <a class="nav-link" href="/register">Register now</a></h6>

  </div>

@endsection