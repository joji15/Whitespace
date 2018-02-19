<!DOCTYPE html>
<html lang="en">
<head>
  <title>WhiteSpace Student Dashboard -  @yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
  <!-- Open Iconic - Icon Set *Glyphicons don't work -->
  <link href="/css/open-iconic-bootstrap.css" rel="stylesheet">
  <!-- Stylesheet for Customazation -->
  <link href="/css/custom.css" rel="stylesheet">
  <link href="/css/styles.css" rel="stylesheet">
  <link href="/css/colors.css" rel="stylesheet">
  <link href="/css/media-queries.css" rel="stylesheet">
  <!-- Google font Link -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <script src="/js/html2canvas.min.js"></script>
  <!-- <script src="/data/isplayer.js"></script> -->

  <style>
    .oi-fork{
      -webkit-transform: rotate(90deg);
      -moz-transform: rotate(90deg);
      -o-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      transform: rotate(90deg);
    }

    .nav-item{
      font-size: 14px;
    }

    .nav-pills .nav-link{
      border-radius: 0px;
    }
    #editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        height:300px;
    }
  </style>
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-light fixed-top d-flex justify-content-end studentshadow p-2">
    <button class="navbar-toggler bg-grey pl-2 pr-2 pt-1 pb-1" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2 text-dark" href="" style="font-size:16px; font-family:Roboto;">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      {{ Auth::user()->student_lname }}, {{ Auth::user()->student_fname }}
    </a>
    <li style="list-style-type:none">
      <a class="btn btn-danger btn-sm mr-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <span class="oi oi-account-logout"></span> Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </nav>

  <div class="container-fluid">
    <div class="row" style="height:100%;">
      <div class="col-sm-4 col-md-3 col-lg-2 bg-light" style="padding:0px; z-index:10;" id="navbarmenu">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr />
            <a class="nav-item nav-link" href="/student/Home" id="studentpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <a class="nav-item nav-link" href="/student/Profile" id="studentprofilepill"><span class="oi oi-person text-red" title="Profile" aria-hidden="true"></span> Profile</a>
            <!-- <div id="profilesub">
              <a class="nav-item nav-link pl-5 btn-sm" href="/student/Profile/Quiz" id="studentquizpill"><span class="oi oi-clock" title="ScheduledQuizzes" aria-hidden="true"></span> Quizzes</a>
              <a class="nav-item nav-link pl-5 btn-sm" href="/student/Profile/Download" id="studentdownpill"><span class="oi oi-data-transfer-download" title="Downloads" aria-hidden="true"></span> Downloads</a>
            </div> -->
            <a class="nav-item nav-link" href="/student/SQLLesson" id="studentlessonpill"><span class="oi oi-justify-left text-orange" title="SQL Lessons" aria-hidden="true"></span> Lessons</a>
            <a class="nav-item nav-link" href="/student/Simulator" id="studentsimpill"><span class="oi oi-hard-drive text-green" title="SQL Simulator" aria-hidden="true"></span> Query Simulator</a>
            <a class="nav-item nav-link" href="/student/Designer" id="studentdespill"><span class="oi oi-fork text-yellow" title="SQL Designer" aria-hidden="true"></span> Designer</a>
            <hr class="hr-white"/>
            <p id="testtxt" style="font-size:10px">
              
            </p>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>

  <!-- To make use of the active class in the side nav, edit this js file -->
  <script src="/js/studentsidenavbar.js"></script>

  <!-- Tree view -->
  <script src="/js/treeview.js"></script>

  <script>
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
</body>
</html>
