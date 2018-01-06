@extends('layouts.profApp')

@section('title', 'Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="quizContent">
  <div class="container-fluid contentMargin">
    <br />
    <div class="row">
      <div class="col-12 col-md-10 col-lg-10">
        <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
          <span class="oi oi-spreadsheet text-red" title="Quiz" aria-hidden="true"></span> Manage Quizzes
        </p>
      </div>
      <div class="col-12 col-md-2 col-lg-2 text-right">
        <a href="{{ route('prof.quiz.CreateQuiz') }}" class="btn btn-primary" role="button" style="color: #FFFFFF"><span class="oi oi-plus"></span> Create Quiz</a>
      </div>
    </div>
    <hr />
    <div class="row">
      <div class="col-12">
        <p class="h4 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
          <span class="oi oi-clock text-yellow" title="Quiz" aria-hidden="true"></span> Scheduled Quizzes
        </p>
      </div>
    @foreach($quiz as $quiz)
      <div class="col-12 col-md-6 col-lg-3">
          <div class="card border-silver">
            <div class="card-body">
              <h4 class="card-title text-center"><a href="adminViewQuiz" style="text-decoration:none;">{{$quiz->quiz_title}}</a></h4>
              <p class="card-text text-center">{{$quiz->quiz_desc}}</p>
              <form action="{{ route('prof.quiz.EditQuiz') }}" method="get">
                <input type="hidden" name="quiz_id" value="{{$quiz->quiz_id}}">
                <div class="text-center">
                  <button type="submit" name="submit" class="button bg-green"><span>Questions</span></button>
                  <a href="adminScheduleQuiz" role="button" name="button" class="button bg-red"><span>Schedules</span></a>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <small class="text-muted">Created {{ Carbon\Carbon::parse($quiz->created_at)->diffForHumans() }}</small>
            </div>
          </div>
      </div>
    @endforeach
    </div>
    <hr />
    <div class="row mt-4">
      <div class="col-12">
        <p class="h4 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
          <span class="oi oi-check text-green" title="Quiz" aria-hidden="true"></span> Finished Quizzes
        </p>
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
