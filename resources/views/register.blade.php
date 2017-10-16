<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register - Whitespace</title>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</head>
<body class="bodycenter">
  <div class="container animated fadeIn" style="animation-duration: 630ms;">
    <div class="row justify-content-center">
      <div class="col-md-6 align-self-center">
        <div class="row">
          <div class="col-12 animated fadeInUp d-inline-flex d-flex justify-content-center" style="animation-delay: 370ms; animation-duration: 630ms;">
            <img src="{{ asset('img/WS.png') }}" class="main-header-img" width="150" height="150" alt="WS Logo">
            <h1 class="display-3 title main-header align-self-center"  style="font-family:Segoe UI;"><em>WhiteSpace</em></h1>
          </div>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <!-- <form action="" method="POST"> -->
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-person" title="First Name" aria-hidden="true"></span></span>
          <input type="text" class="form-control" placeholder="Enter First Name" aria-label="firstName" aria-describedby="firstname" id="firstname">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-person" title="Middle Name" aria-hidden="true"></span></span>
          <input type="text" class="form-control" placeholder="Enter Middle Name" aria-label="middleName" aria-describedby="middleName" id="middleName">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-person" title="Last Name" aria-hidden="true"></span></span>
          <input type="text" class="form-control" placeholder="Enter Last Name" aria-label="LastName" aria-describedby="lastName" id="lastName">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
          <input type="password" class="form-control" placeholder="Enter Password" aria-label="Password" aria-describedby="password" id="password">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
          <input type="password" class="form-control" placeholder="Confirm Password" aria-label="ConfirmPassword" aria-describedby="confirmpassword" id="confirmpassword">
        </div>
        <br />
        <div class="input-group">
          <span class="input-group-addon"><span class="oi oi-people" title="section" aria-hidden="true"></span></span>
          <select class="form-control custom-select" id="section" name="section">
            <option value="0" selected disabled style="display:none;">Select Section</option>
            <option value="1">BSIT: 2017-2018</option>
            <option value="2">BSIS: 2017-2018</option>
            <option value="3">BSCS: 2017-2018</option>
          </select>
        </div>
        <br />
        <div class="form-group row text-center">
          <div class="col-md-12">
            <a class="btn btn-primary align-middle p-2" href="home"><span class="oi oi-pencil" title="Register" aria-hidden="true"></span> Register</a>
          </div>
        </div>
        <!-- </form> -->
        <p class="text-center">Have an account? <a href="/">Login Here</a></p>
      </div>
    </div>
  </div>
</body>
</html>
