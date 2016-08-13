<!DOCTYPE html>
<html lang = "en">
  <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div>
      <nav class = "navbar navbar-default">
        <div class = "container">

        @if (Auth::check())
        <a class = "navbar-left btn btn-link" href = "/dash">Dashboard</a>
        <form class = "navbar-right" action = "/logout" method = "GET">
          <button type = "submit" class = "btn btn-link" >Log Out</button>
        </form>
        @else
        <form class = "navbar-right" action = "/login" method = "GET">
          <button type = "submit" class = "btn btn-link">Log In</button>
        </form>
        @endif
      </div>
      </nav>
    </div>

    @yield('content')

  </body>
</html>
