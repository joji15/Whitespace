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

  });
  </script>
  <style>
  .nav-item{
    font-size: 14px;
  }
  .nav-pills .nav-link{
    border-radius: 0px;
  }
  </style>
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-flex justify-content-end shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      {{ Auth::user()->prof_fName }} {{ Auth::user()->prof_lName }}
    </a>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="oi oi-bell" title="notification" aria-hidden="true"> &nbsp;&nbsp;<span class="badge badge-light">4</span></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="oi oi-person" title="account" aria-hidden="true"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-red" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <span class="oi oi-account-logout" title="logout" aria-hidden="true"></span> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row" style="height:100%;">
      <div class="col-sm-4 col-md-3 col-lg-2" style="padding:0px; background-color: rgb(40, 40, 40)" id="navbarmenu">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr class="hr-white"/>
            <a class="nav-item nav-link" href="/prof/Home" id="profpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <a class="nav-item nav-link" href="/prof/Student" id="profStudpill"><span class="oi oi-people" title="Student" aria-hidden="true"></span> Students</a>
            <div id="studentSub">
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/CreateClass" id="profCreateClasspill"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create Class</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/ViewProgress" id="profViewProgresspill"><span class="oi oi-graph" title="ViewProgress" aria-hidden="true"></span> Student Progress</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/ViewDatabase" id="profViewDBpill"><span class="oi oi-folder" title="Classdb" aria-hidden="true"></span> Class Database</a>
            </div>
            <a class="nav-item nav-link" href="/prof/Quiz" id="profQuizpill"><span class="oi oi-spreadsheet" title="Quiz" aria-hidden="true"></span> Quizzes</a>
            <div id="quizSub">
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Quiz/ViewQuiz" id="viewQuizpill"><span class="oi oi-magnifying-glass" title="viewQuiz" aria-hidden="true"></span> View Quizzes</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Quiz/CreateQuiz" id="createQuizpill"><span class="oi oi-plus" title="createQuiz" aria-hidden="true"></span> Create Quiz</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Quiz/EditQuiz" id="editQuizpill"><span class="oi oi-pencil" title="editQuiz" aria-hidden="true"></span> Edit Quiz</a>
            </div>
            <a class="nav-item nav-link" href="/prof/Upload" id="profUploadpill"><span class="oi oi-data-transfer-upload" title="Upload" aria-hidden="true"></span> Upload</a>
            <hr class="hr-white"/>
            <div class="fixed-bottom mb-2 ml-2"><button type="button" class="btn btn-primary" id="minbtn"><span class="oi oi-caret-left" title="navmenu" aria-hidden="true"></span></button></div>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>
</body>
</html>
