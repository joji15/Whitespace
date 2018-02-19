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
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
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
            <a class="nav-link nav-def p-2 pl-3 pr-3 text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('prof.login') }}">Login as Professor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-def p-2 pl-3 pr-3 text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('student.login') }}">Login as Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid bg-white" style="height:auto;">
    <div class="container">
      <div class="row" style="font-family: Segoe UI; font-weight:lighter;">
        <div class="col-3 mb-5 mt-5">
          <p class="text-center align-self-center">
            <img src="{{ asset('img/20 Gong - Kim.jpg') }}" width="200" height="200" alt="Cruz, Aimee Lou D.">
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5 mt-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">Cruz, Aimee Lou D.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-5">
                  <ul>
                    <li>
                      Email: aimeecruz107@gmail.com
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <p class="text-center align-self-center">
            <img src="{{ asset('img/21 De Vera.jpg') }}" width="200" height="200" alt="De Vera, Jazelene Mae M.">
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">De Vera, Jazelene Mae M.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-5">
                  <ul>
                    <li>
                      Email: jazelenedevera@gmail.com
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3 mb-5">
          <p class="text-center align-self-center">
            <img src="{{ asset('img/joji.jpg') }}" width="200" height="200" alt="George, Donald Patrick C.">
          </p>
          <hr />
        </div>
        <div class="col-9 mb-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <p class="card-title h2" style="font-family: Segoe UI; font-weight:lighter;">George, Donald Patrick C.</p>
                  <p class="card-text">BSIT-4A</p>
                </div>
                <div class="col-5">
                  <ul>
                    <li>
                      Email: donpatrick15@gmail.com
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
            About Us
          </a>
        </div>
      </div>
    </div>
  </nav>
</body>
</html>
