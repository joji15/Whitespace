<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Login - Whitespace</title>

  <!-- Bootstrap CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
  <!-- Open Iconic - Icon Set *Glyphicons don't work -->
  <link href="/css/open-iconic-bootstrap.css" rel="stylesheet">
  <!-- Stylesheet for Customazation -->
  <link href="/css/styles.css" rel="stylesheet">
  <link href="/css/colors.css" rel="stylesheet">
  <link href="/css/media-queries.css" rel="stylesheet">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</head>
<body class="bodycenter">
  <div class="container animated fadeIn">
    <div class="row justify-content-center">
      <div class="col-md-6 align-self-center">
        <div class="row">
          <div class="col-12 animated fadeInUp d-inline-flex d-flex justify-content-center">
            <img src="{{ asset('img/WS.png') }}" class="main-header-img" width="150" height="150" alt="WS Logo">
            <h1 class="display-3 title main-header align-self-center"  style="font-family:Segoe UI;"><em>WhiteSpace</em></h1>
          </div>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <!-- <form action="" method="POST" > -->
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-person" title="Username" aria-hidden="true"></span></span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username" id="username">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
          <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password" id="password">
        </div>
        <br />
        <div class="form-group row text-center">
          <div class="col-md-12">
            <a class="btn btn-primary align-middle p-2" href="admin"><span class="oi oi-account-login" title="Login" aria-hidden="true"></span> Login</a>
          </div>
        </div>
        <!-- </form> -->
        <p class="text-center">No account? <a href="register">Sign-Up Here</a></p>
      </div>
    </div>
  </div>

  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
