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
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand animated fadeIn" href="" style="font-family:Roboto Light">
      <img src="{{ asset('img/WS-ICO.png') }}" width="50" height="50" alt="WS Logo">
    </a>
  </nav>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2">
      <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="admin">Home</a>
        <a class="nav-link" href="adminStud">Students</a>
        <a class="nav-link" href="adminQuiz">Quizzes</a>
        <div class="dropdown-divider"></div>
      </nav>
    </div>

    @yield('content')
  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
