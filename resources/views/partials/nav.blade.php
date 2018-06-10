  <!--MAIN NAV BAR -->

  <nav class="navbar">
  
  <div class="container">

    <a href="#" class="navbar-brand">LaraBlog</a>
    
      <ul class="nav ml-auto">
    
        <li class="nav-item">

          <a href="/" class="nav-link">Home</a>
        
        </li>
          
        <li class="nav-item">

          <a href="/create" class="nav-link">Create</a>
        
        </li>
    
        <li class="nav-item">

             <a href="/login" class="nav-link">Login</a>

        </li>

        @if(auth()->check())

          <li class="nav-item">

            <a href="#" class="nav-link"><h5>{{ Auth::user()->name }}<h5></a>

          </li>

        @endif
    
      </ul>

  </div>

</nav>