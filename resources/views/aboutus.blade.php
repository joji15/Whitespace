<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Whitespace - About Us</title>

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
  <style>

  </style>
</head>
<body style="background-color: rgba(15, 15, 15, 1); font-family: Segoe UI; font-weight:lighter;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(15, 15, 15, 1);">
    <div class="container">
      <a class="navbar-brand align-middle mr-auto p-2 text-white" href="{{ route('homepage') }}">
        <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
        Whitespace
      </a>
      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('prof.login') }}">Login as Professor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('student.login') }}">Login as Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid bg-white" style="height:auto;">
    <div class="container">
      <div class="row" style="font-family: Segoe UI; font-weight:lighter;">
        <div class="col-3 mb-5 mt-5">
          <br />
          <br />
          <br />
          <p class="text-center align-self-center">
            Picture Goes Here
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5 mt-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">Cruz, Aimee Lou D.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-4">
                  <ul>
                    <li>
                      Phone Number: Placeholder
                    </li>
                    <li>
                      Email: Placeholder
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <br />
          <br />
          <br />
          <p class="text-center align-self-center">
            Picture Goes Here
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">De Vera, Jazelene Mae M.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-4">
                  <ul>
                    <li>
                      Phone Number: Placeholder
                    </li>
                    <li>
                      Email: Placeholder
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <br />
          <br />
          <br />
          <p class="text-center align-self-center">
            Picture Goes Here
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">George, Donald Patrick C.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-4">
                  <ul>
                    <li>
                      Phone Number: Placeholder
                    </li>
                    <li>
                      Email: Placeholder
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(15, 15, 15, 1);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <a class="navbar-brand align-middle mr-auto p-2 text-white" href="#">
            Terms of Service
          </a>
          <a class="navbar-brand align-middle mr-auto p-2 text-white" href="#">
            Contacts
          </a>
          <a class="navbar-brand align-middle mr-auto p-2 text-white" href="#">
            About Us
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
