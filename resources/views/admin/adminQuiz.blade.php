@extends('layouts.adminapp')

@section('title', 'Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="quizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <div class="row">
      <div class="col-12 col-md-10 col-lg-10">
        <p class="h2" style="font-family:Segoe UI Light;">
          Manage Quizzes
        </p>
      </div>
      <div class="col-12 col-md-2 col-lg-2 text-right">
        <a href="adminCreateQuiz" class="btn btn-primary" role="button" style="color: #FFFFFF"><span class="oi oi-plus"></span> Create Quiz</a>
      </div>
    </div>
    <hr />
    <div class="row">

      <div class="col-12 col-md-6 col-lg-3 mt-4">
          <div class="card border-silver">
            <div class="card-body">
              <h4 class="card-title text-center"><a href="" style="text-decoration:none;">Quiz Title</a></h4>
              <p class="card-text">Brief description about the quiz</p>
              <div class="text-center">
                <a href="adminViewQuiz" role="button" name="button" class="button" style="background-color: #00b300; "><span>Questions</span></a>
                <a href="adminScheduleQuiz" role="button" name="button" class="button" style="background-color: #e62e00; "><span>Schedules</span></a>
              </div>
            </div>
            <div class="card-footer">
              <small class="text-muted">Posted 3 mins ago</small>
            </div>
          </div>
      </div>

    </div>
  </div>
</div>
<style>
.button {
  display: inline-block;
  border-radius: 0px;
  border: none;
  color: #FFFFFF;
  text-align: center;
  padding: 10px;
  width: 80%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  color: #FFFFFF;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
@endsection
