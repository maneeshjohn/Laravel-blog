@extends('layout')

@section('content')

  <div class="col-sm-9 create-section">

    <h3 >Create A Post</h1>

    <hr>

    <form method="POST" action="/posts">

      {{ csrf_field() }}

      <div class="form-group">

        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>

      </div>  

      <div class="form-group">

        <label for="body">Post</label>
        <textarea name="body" class="form-control" required></textarea>

      </div>
    
      <div class="form-group">

        <input type="submit" class="btn btn-primary" name="submit" value="Publish">
    
      </div>

    </form>

    @include('partials.error')

  </div>

@endsection