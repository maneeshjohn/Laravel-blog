@extends('layout')

@section('content')

  <div class="col-sm-9">

    <h1>Showing All Posts</h1>

    @foreach ($posts as $post)

      @include('posts.articles')
    
    @endforeach

  </div>

@endsection