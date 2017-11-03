<!DOCTYPE html>
<html lang="en">
<head>
  <title>WhiteSpace Student Dashboard -  @yield('title')</title>
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

  <!-- To make use of the active class in the side nav, edit this js file -->
  <script src="/js/sidenavbar.js" async></script>
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-flex justify-content-end shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="" style="font-family:Roboto;">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      Student's Dashboard
    </a>
    <li style="list-style-type:none">
      <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </nav>
  <div class="container-fluid">
    <div class="row" style="height:100%">
      <div class="col-sm-4 col-md-3 col-lg-2" style="background-color: rgb(40, 40, 40)">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr class="hr-white"/>
            <!--  Change id  -->
            <a class="nav-item nav-link" href="{{ route('student.Home') }}" id="adminpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <div id="homeSub">
              <a class="nav-item nav-link ml-4 btn-sm" href="{{ route('student.Home.studentsClassList') }}" id=""><span class="oi oi-list" title="ClassList" aria-hidden="true"></span> Class List</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="{{ route('student.Home.studentsScheduledQuizzes') }}" id=""><span class="oi oi-clock" title="ScheduledQuizzes" aria-hidden="true"></span> Quizzes</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="{{ route('student.Home.studentsRankings') }}" id=""><span class="oi oi-vertical-align-bottom" title="Rankings" aria-hidden="true"></span> Rankings</a>
            </div>
            <a class="nav-item nav-link" href="{{ route('student.SQLLesson') }}" id="adminStudpill"><span class="oi oi-book" title="SQL Lessons" aria-hidden="true"></span> SQL Lessons</a>
            <a class="nav-item nav-link" href="{{ route('student.studentsDownload') }}" id="adminUploadpill"><span class="oi oi-data-transfer-download" title="Uploaded Files" aria-hidden="true"></span> Download Files</a>
            <a class="nav-item nav-link" href="{{ route('student.studentsSimulator') }}" id="adminQuizpill"><span class="oi oi-loop-circular" title="SQL Simulator" aria-hidden="true"></span> SQL Simulator</a>
            <hr class="hr-white"/>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>

  <!-- Tree view -->
  <script src="/js/treeview.js"></script>

  <!--Lined Textarea-->
  <script src="./js/bcralnit.js"></script>

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
  <script>
  $(".lined").bcralnit({
      width: '50px',
      background: 'rgb(38,50,56)',
      color: '#fff',
  });
  </script>
</body>
</html>
