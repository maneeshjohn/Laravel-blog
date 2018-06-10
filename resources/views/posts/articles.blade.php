<div class="card-body blog-post">

  <h3>

    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
  
  </h3>

  <p class="posted-on">
    
    {{ $post->user->name }} <i>on</i>
  
    <small>
    
      {{ $post->created_at->toFormattedDateString() }}

    </small>

  </p>
  
  <p>{{ $post->body }}</p>

</div>