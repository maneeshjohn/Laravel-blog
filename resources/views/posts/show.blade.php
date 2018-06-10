@extends('layout')

@section('content')

  <div class="col-sm-9 the-post">

    <h2>{{ $post->title}}</h2>

    <h6>{{ $post->created_at }}</h6>

    <h5>{{ $post->body }}</h5>

    <hr>

    <div class="comments">

      <h5>Comments</h5>

      <ul class="list-group">

        @foreach ($post->comments as $comment)

          <li class="list-group-item">
            
            <strong>{{ $comment->created_at->diffForHumans() }} - </strong>
          
            <i>{{ $comment->comments }}</i>

          </li>

        @endforeach

        <form method="POST" action="/posts/{{ $post->id }}/comment">

          {{ csrf_field() }}

          <div class="card-body">

            <div class="form-group">

              <label for="comment">Add a comment:</label>

              <textarea class="form-control" name="comment" required></textarea>

            </div>

            <div class="form-group">

              <input type="submit" value="Comment" class="btn btn-primary">

            </div>

          </div>
        
        </form>

      </ul>

      @include('partials.error')

    </div>

  </div>

@endsection