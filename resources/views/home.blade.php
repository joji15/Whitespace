<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Whitespace - Home</title>

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
      <a class="navbar-brand align-middle mr-auto p-2 text-white" href="#">
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
  <div class="container-fluid pl-0 pr-0" style="height:auto;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/WSBanner.png') }}" alt="First slide Banner" style="position: fixed;">
          <img class="d-block w-100" src="{{ asset('img/first.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/second.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/third.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="background: linear-gradient(to left, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.7));">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="background: linear-gradient(to right, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.7));">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container-fluid bg-white text-black h-500">
    <div class="container">
      <div class="row">
        <div class="col-12">
          
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
          <a class="navbar-brand align-middle mr-auto p-2 text-white" href="{{ route('homepage.aboutus') }}">
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
