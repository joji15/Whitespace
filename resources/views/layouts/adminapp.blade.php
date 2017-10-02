<!DOCTYPE html>
<html lang="en">
<head>
  <title>WhiteSpace Admin Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/styles.css" rel="stylesheet">
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
  <!-- Open Iconic - Icon Set *Glyphicons don't work -->
  <link href="/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-flex justify-content-end">
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="" style="font-family:Roboto Light">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      Teacher's Dashboard
    </a>
    <a class="btn btn-outline-danger align-middle p-2" href="home"><span class="oi oi-account-logout" title="icon name" aria-hidden="true"></span> Logout</a>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-md-2 col-lg-2" id="sidenavbar">
        <nav class="nav-pills col-sm-4 col-md-2 col-lg-2 d-none d-sm-block bg-light sidebar">
          <div class="dropdown-divider"></div>
          <a class="nav-item nav-link animated fadeIn" href="admin" id="admin"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
          <a class="nav-item nav-link animated fadeIn" href="adminStud" id="adminStud"><span class="oi oi-people" title="Student" aria-hidden="true"></span> Students</a>
          <a class="nav-item nav-link animated fadeIn" href="adminQuiz" id="adminQuiz"><span class="oi oi-spreadsheet" title="Quiz" aria-hidden="true"></span> Quizzes</a>
          <a class="nav-item nav-link animated fadeIn" href="adminUpload" id="adminUpload"><span class="oi oi-data-transfer-upload" title="Upload" aria-hidden="true"></span> Upload</a>
          <div class="dropdown-divider"></div>
        </nav>
      </div>

      @yield('content')
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type='text/javascript' src="/js/jquery-3.2.1.min.js"></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script type='text/javascript' src="/js/bootstrap.min.js"></script>

  <!-- To make use of the active class in the side nav, edit this js file -->
  <script type='text/javascript' src="/js/sidenavbar.js"></script>
</body>
</html>
