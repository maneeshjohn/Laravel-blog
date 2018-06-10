<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/app.css">

  <title>LaraBlog</title>

</head>

<body>

  @include('partials.nav')

  @if($flash = session('message'))

    <div id="flash">

     {{ $flash }}

    </div> 

  @endif

  <div class="container">

    <div class="row display">

      @yield('content')

      @include('partials.sidebar')

    </div>

  </div>

  @include('partials.footer')

  <script src="/js/main.js"></script>

</body>

</html>