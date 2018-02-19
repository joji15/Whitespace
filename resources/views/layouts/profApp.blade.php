<!DOCTYPE html>
<html lang="en">
<head>
  <title>WhiteSpace Professor Dashboard -  @yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
  <!-- Open Iconic - Icon Set *Glyphicons don't work -->
  <link href="/css/open-iconic-bootstrap.css" rel="stylesheet">
  <!-- Stylesheet for Customazation -->
  <link href="/css/styles.css" rel="stylesheet">

  <!-- jQuery UI CSS files -->
  <link href="/css/jquery-ui.min.css" rel="stylesheet">
  <link href="/css/jquery-ui.structure.min.css" rel="stylesheet">
  <link href="/css/jquery-ui.theme.min.css" rel="stylesheet">

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
  <!-- jQuery UI JS files -->
  <script src="/js/jquery-ui.min.js"></script>

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
    <button class="navbar-toggler pl-2 pr-2 pt-1 pb-1" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="" style="font-size:16px; font-family:Roboto;">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      {{ Auth::user()->prof_fName }} {{ Auth::user()->prof_lName }}
    </a>
    <li style="list-style-type:none">
      <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="oi oi-account-logout"></span> Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </nav>

  <div class="container-fluid">
    <div class="row" style="height:100%;">
      <div class="col-sm-4 col-md-3 col-lg-2" style="padding:0px; background-color: rgb(40, 40, 40)" id="navbarmenu">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr class="hr-white"/>
            <a class="nav-item nav-link" href="{{route('prof.profHome')}}" id="profpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <a class="nav-item nav-link" href="{{route('prof.student')}}" id="profStudpill"><span class="oi oi-people text-red" title="Student" aria-hidden="true"></span> Students</a>
            <div id="studentSub">
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/CreateClass" id="profCreateClasspill"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create Class</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/ViewProgress" id="profViewProgresspill"><span class="oi oi-graph" title="ViewProgress" aria-hidden="true"></span> Student Progress</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/prof/Student/ViewDatabase" id="profViewDBpill"><span class="oi oi-folder" title="Classdb" aria-hidden="true"></span> Class Database</a>
            </div>
            <a class="nav-item nav-link" href="{{route('prof.quiz')}}" id="profQuizpill"><span class="oi oi-spreadsheet text-orange" title="Quiz" aria-hidden="true"></span> Quizzes</a>
            <a class="nav-item nav-link" href="{{route('prof.upload')}}" id="profUploadpill"><span class="oi oi-data-transfer-upload text-green" title="Upload" aria-hidden="true"></span> Upload</a>
            <a class="nav-item nav-link" href="{{route('prof.audit')}}" id="profAuditpill"><span class="oi oi-script text-white" title="Audit Trail" aria-hidden="true"></span> Audit Trail</a>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>
</body>
</html>
