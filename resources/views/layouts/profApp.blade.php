<!DOCTYPE html>
<html lang="en">
<head>
  <title>WhiteSpace Admin Dashboard -  @yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <link href="/css/admintree.css" rel="stylesheet">
  <!-- Google font Link -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/Chart.bundle.min.js"></script>

  <!-- To make use of the active class in the side nav, edit this js file -->
  <script src="/js/sidenavbar.js" async></script>

  <script async>
  $(document).ready(function(){
    $('#searchInput').on('click', function(){
      var display = $('#searchResult').css('display');
      if (display == "none") {
        $("#searchResult").show();
      }
      else if (display == "block"){
        $("#searchResult").hide();
      }
    });
  });
  </script>
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-flex justify-content-end shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      Teacher's Dashboard
    </a>
    <form class="form-inline mr-2">
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="oi oi-person" title="Account Menu" aria-hidden="true"></span></a>
        <div class="dropdown-menu" style="left:-100px">
          <h6 class="dropdown-header">Dropdown header</h6>
          <a class="dropdown-item" href="#"><span class="oi oi-cog" title="action" aria-hidden="true"></span> Action</a>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
          <a class="dropdown-item" href="home"><span class="oi oi-account-logout" title="logout" aria-hidden="true"></span> Logout</a>
        </div>
      </div>
    </form>

  </nav>
  <div class="container-fluid">
    <div class="row" style="height:100%;">
      <div class="col-sm-4 col-md-3 col-lg-2" style="background-color: rgb(40, 40, 40)">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr class="hr-white"/>
            <a class="nav-item nav-link" href="prof" id="profpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <a class="nav-item nav-link" href="profStud" id="profStudpill"><span class="oi oi-people" title="Student" aria-hidden="true"></span> Students</a>
            <div id="studentSub">
              <a class="nav-item nav-link ml-4 btn-sm" href="profCreateClass" id="profCreateClasspill"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create Class</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="profViewProgress" id="profViewProgresspill"><span class="oi oi-graph" title="ViewProgress" aria-hidden="true"></span> Student Progress</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="profViewDB" id="profViewDBpill"><span class="oi oi-folder" title="Classdb" aria-hidden="true"></span> Class Database</a>
            </div>
            <a class="nav-item nav-link" href="profQuiz" id="profQuizpill"><span class="oi oi-spreadsheet" title="Quiz" aria-hidden="true"></span> Quizzes</a>
            <div id="quizSub">
              <a class="nav-item nav-link ml-4 btn-sm" href="profViewQuiz" id="viewQuizpill"><span class="oi oi-magnifying-glass" title="viewQuiz" aria-hidden="true"></span> View Quizzes</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="profCreateQuiz" id="createQuizpill"><span class="oi oi-plus" title="createQuiz" aria-hidden="true"></span> Create Quiz</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="profEditQuiz" id="editQuizpill"><span class="oi oi-pencil" title="editQuiz" aria-hidden="true"></span> Edit Quiz</a>
            </div>
            <a class="nav-item nav-link" href="profUpload" id="profUploadpill"><span class="oi oi-data-transfer-upload" title="Upload" aria-hidden="true"></span> Upload</a>
            <hr class="hr-white"/>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>
</body>
</html>
