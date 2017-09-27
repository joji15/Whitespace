<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register - Whitespace</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/styles.css" rel="stylesheet">
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
</head>
<body class="bodycenter">
  <div class="container animated fadeIn">
    <div class="row justify-content-center">
      <div class="col-md-6 align-self-center">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-3 animated fadeInUp">
            <img src="{{ asset('img/WS.png') }}" width="150" height="150" alt="WS Logo">
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9 align-self-center animated fadeInUp">
            <i><h1 class="display-3 text-center title" style="font-family:Segoe UI;">WhiteSpace</h1></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 animated">
        <form action="" method="POST">
          <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label">Enter Username</label>
            <div class="col-md-8">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label">Enter Password</label>
            <div class="col-md-8">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label">Confirm Password</label>
            <div class="col-md-8">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="section" class="col-md-4 col-form-label">Section</label>
            <div class="col-md-8">
              <select class="custom-select" id="section" name="section">
                <option selected>BSIT</option>
                <option value="1">BSIS</option>
                <option value="2">BSCS</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="section" class="col-md-4 col-form-label">Select Teacher</label>
            <div class="col-md-8">
              <select class="custom-select" id="section" name="section">
                <option selected>Ms. De Vera</option>
                <option value="1">Ms. Cruz</option>
                <option value="2">Mr. George</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
        <p class="text-center">Have an account? <a href="/">Login Here</a></p>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
