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
</head>
<body class="dashboard">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top d-flex justify-content-end shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenavbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand align-middle animated fadeIn mr-auto p-2" href="" style="font-family:Roboto Light">
      <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
      Teacher's Dashboard
    </a>
    <a class="btn btn-outline-danger align-middle p-2" href="home"><span class="oi oi-account-logout" title="icon name" aria-hidden="true"></span> Logout</a>
  </nav>
  <div class="container-fluid">
    <div class="row" style="-webkit-min-logical-height: -webkit-fill-available">
      <div class="col-sm-4 col-md-3 col-lg-2" style="background-color: rgb(40, 40, 40)">
        <nav class="nav nav-pills flex-column">
          <div class="navbar-collapse animated fadeIn" id="sidenavbar">
            <hr class="hr-white"/>
            <a class="nav-item nav-link" href="admin" id="adminpill"><span class="oi oi-home" title="Home" aria-hidden="true"></span> Home</a>
            <a class="nav-item nav-link" href="adminStud" id="adminStudpill"><span class="oi oi-people" title="Student" aria-hidden="true"></span> Students</a>
            <div id="studentSub">
              <a class="nav-item nav-link ml-4 btn-sm" href="adminCreateClass" id="adminCreateClasspill"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create Class</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="adminViewProgress" id="adminViewProgresspill"><span class="oi oi-graph" title="ViewProgress" aria-hidden="true"></span> Student Progress</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="adminViewDB" id="adminViewDBpill"><span class="oi oi-folder" title="Classdb" aria-hidden="true"></span> Class Database</a>
            </div>
            <a class="nav-item nav-link" href="adminQuiz" id="adminQuizpill"><span class="oi oi-spreadsheet" title="Quiz" aria-hidden="true"></span> Quizzes</a>
            <div id="quizSub">
              <a class="nav-item nav-link ml-4 btn-sm" href="adminViewQuiz" id="viewQuizpill"><span class="oi oi-magnifying-glass" title="CreateClass" aria-hidden="true"></span> View Quizzes</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="adminCreateQuiz" id="createQuizpill"><span class="oi oi-plus" title="ViewProgress" aria-hidden="true"></span> Create Quiz</a>
              <a class="nav-item nav-link ml-4 btn-sm" href="adminEditQuiz" id="editQuizpill"><span class="oi oi-pencil" title="Classdb" aria-hidden="true"></span> Edit Quiz</a>
            </div>
            <a class="nav-item nav-link" href="adminUpload" id="adminUploadpill"><span class="oi oi-data-transfer-upload" title="Upload" aria-hidden="true"></span> Upload</a>
            <hr class="hr-white"/>
          </div>
        </nav>
      </div>
      @yield('content')
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <!-- To make use of the active class in the side nav, edit this js file -->
  <script src="/js/sidenavbar.js"></script>

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
