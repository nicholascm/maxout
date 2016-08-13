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
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57af5376e466dae8"></script>
    <script  src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script type ="text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
