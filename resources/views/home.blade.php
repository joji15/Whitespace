<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" id="homebody">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Whitespace - Home</title>

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Animate CSS for animations -->
  <link href="/css/animate.min.css" rel="stylesheet">
  <!-- Open Iconic - Icon Set *Glyphicons don't work -->
  <link href="/css/open-iconic-bootstrap.css" rel="stylesheet">
  <!-- Stylesheet for Customazation -->
  <link href="/css/styles.css" rel="stylesheet">
  <link href="/css/colors.css" rel="stylesheet">
  <link href="/css/media-queries.css" rel="stylesheet">
  <link href="/css/aos.css" rel="stylesheet">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/html2canvas.min.js"></script>
  <script src="/js/aos.js"></script>
  <style>
  .btn:focus {
    box-shadow: initial;
  }
  .form-control:focus {
    border-color: white;
  }
  .var-highlight {
    color: #C0AD60;
  }

  .string-highlight {
    color: rgba(253, 149, 90, 0.8);
  }

  #typewriter {
    color: rgb(255, 249, 226);
    font-size: 14px;
    margin: 0;
    font-family: "Courier New";
  }
  #typewriter:after {
    content: "|";
    -webkit-animation: blink 500ms linear infinite alternate;
    animation: blink 500ms linear infinite alternate;
  }

  @-webkit-keyframes blink {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  @keyframes blink {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
</style>
</head>
<body style="background-color: rgba(15, 15, 15, 1); font-family: Segoe UI; font-weight:lighter;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(15, 15, 15, 1);" id="mainNav">
    <div class="container">
      <a class="navbar-brand align-middle mr-auto p-2 text-white" href="#">
        <img src="{{ asset('img/WS-ICO.png') }}" width="40" height="40" alt="WS Logo">
        Whitespace
      </a>
      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-def p-2 pl-3 pr-3 text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('prof.login') }}">Login as Professor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-def p-2 pl-3 pr-3 text-white" style="font-family: Segoe UI; font-weight:lighter;" href="{{ route('student.login') }}">Login as Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid pl-0 pr-0" style="height:auto;" id="carouseldiv">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/WSBanner.png') }}" alt="First slide Banner" style="position: fixed;">
          <img class="d-block w-100" src="{{ asset('img/first.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/second.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/third.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="background: linear-gradient(to left, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.7));">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="background: linear-gradient(to right, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.7));">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container-fluid bg-white text-black" style="height:auto;font-family: Segoe UI; font-weight: lighter;">
    <div class="container">
      <br />
      <div class="row justify-content-center pt-5 pb-5" id="mainfeat">
        <div class="col-4" data-aos="fade-up-right">
          <div class="card bg-blue-grey border-teal text-white" style="height: 250px">
            <div class="card-body">
              <pre id="typewriter"><span class="var-highlight">USE</span> <span class="string-highlight">sample_db</span>;

<span class="var-highlight">SELECT</span> <span class="string-highlight">customer_id, customer_name</span>
<span class="var-highlight">FROM</span> <span class="string-highlight">`customer_tbl`</span>
<span class="var-highlight">WHERE</span> <span class="string-highlight">customer_id</span> = `10`; </pre>
              <div data-aos="fade-up" data-aos-delay="2000" style="font-size: 12px; font-family: 'Courier New';">
                <p>Results:</p>
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>customer_id</th>
                      <th>customer_name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10</td>
                      <td>Juan Dela Cruz</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">SQL Simulator</p>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">Quiz Generator For Teachers</p>
          </div>
          <div class="col-3" data-aos="fade-up-left">
            <div class="card bg-blue-grey border-teal text-white" style="height: 250px">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-3" data-aos="fade-up-right">
            <div class="card bg-blue-grey border-teal text-white">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">SQL Designer</p>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">The Basics of SQL</p>
          </div>
          <div class="col-3" data-aos="fade-up-left">
            <div class="card bg-blue-grey border-teal text-white">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-3" data-aos="fade-up-right">
            <div class="card bg-blue-grey border-teal text-white">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">File Uploads</p>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">Interactive Lessons and Activities</p>
          </div>
          <div class="col-3" data-aos="fade-up-left">
            <div class="card bg-blue-grey border-teal text-white">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center pt-5 pb-5">
          <div class="col-3" data-aos="fade-up-right">
            <div class="card bg-blue-grey border-teal text-white">
              <div class="card-body">
                <p>Testing</p>
              </div>
            </div>
          </div>
          <div class="col-7 text-center" data-aos="zoom-in" data-aos-delay="500">
            <p class="h1" style="font-weight: lighter;">Progress Monitoring for Teachers</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(15, 15, 15, 1);">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a class="navbar-brand footer-link align-middle mr-auto p-2" href="{{ route('homepage.aboutus') }}">
              About Us
            </a>
          </div>
        </div>
      </div>
    </nav>


    <script>
      AOS.init();

      function down() {
        $('html').animate({
          scrollTop: $("#mainfeat").offset().top
        }, 2000);
      }

      function setupTypewriter(t) {
        var HTML = t.innerHTML;

        t.innerHTML = "";

        var cursorPosition = 0,
        tag = "",
        writingTag = false,
        tagOpen = false,
        typeSpeed = 50,
        tempTypeSpeed = 0;

        var type = function() {

          if (writingTag === true) {
            tag += HTML[cursorPosition];
          }

          if (HTML[cursorPosition] === "<") {
            tempTypeSpeed = 0;
            if (tagOpen) {
              tagOpen = false;
              writingTag = true;
            } else {
              tag = "";
              tagOpen = true;
              writingTag = true;
              tag += HTML[cursorPosition];
            }
          }
          if (!writingTag && tagOpen) {
            tag.innerHTML += HTML[cursorPosition];
          }
          if (!writingTag && !tagOpen) {
            if (HTML[cursorPosition] === " ") {
              tempTypeSpeed = 0;
            }
            else {
              tempTypeSpeed = (Math.random() * typeSpeed) + 50;
            }
            t.innerHTML += HTML[cursorPosition];
          }
          if (writingTag === true && HTML[cursorPosition] === ">") {
            tempTypeSpeed = (Math.random() * typeSpeed) + 50;
            writingTag = false;
            if (tagOpen) {
              var newSpan = document.createElement("span");
              t.appendChild(newSpan);
              newSpan.innerHTML = tag;
              tag = newSpan.firstChild;
            }
          }

          cursorPosition += 1;
          if (cursorPosition < HTML.length - 1) {
            setTimeout(type, tempTypeSpeed);
          }

        };

        return {
          type: type
        };
      }

      var typer = document.getElementById('typewriter');

      typewriter = setupTypewriter(typewriter);

      typewriter.type();
    </script>
  </body>
  </html>
