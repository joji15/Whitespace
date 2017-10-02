<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - Whitespace</title>
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
      <div class="col-md-6 align-self-center">
        <form action="" method="POST">
          <br />
          <div class="input-group">
            <span class="input-group-addon"><span class="oi oi-person" title="Username" aria-hidden="true"></span></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="username">
          </div>
          <br />
          <div class="input-group">
            <span class="input-group-addon"><span class="oi oi-key" title="Password" aria-hidden="true"></span></span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password">
          </div>
          <br />
          <div class="form-group row text-center">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
        <p class="text-center">No account? <a href="register">Sign-Up Here</a></p>
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
