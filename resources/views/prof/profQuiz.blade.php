@extends('layouts.profApp')

@section('title', 'Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="quizContent">
  <div class="container-fluid contentMargin">
    <br />
    <div class="row">
      <div class="col-12 col-md-7 col-lg-7">
        <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
          <span class="oi oi-spreadsheet text-red" title="Quiz" aria-hidden="true"></span> Manage Quizzes
        </p>
      </div>
      <div class="col-12 col-md-5 col-lg-5 text-right">
        <a href="{{ route('prof.quiz.CreateQuiz') }}" class="btn btn-primary mr-1" role="button" style="color: #FFFFFF"><span class="oi oi-plus"></span> Create Quiz</a>
        <a href="{{ route('prof.quiz.ScheduleQuiz') }}" class="btn btn-danger" role="button" style="color: #FFFFFF"><span class="oi oi-plus"></span> Add Schedule</a>
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
      <div class="col-12 col-md-6 col-lg-4 mb-3">
          <div class="card border-silver">
            <div class="card-body">
              <h4 class="card-title text-center">{{$quiz->quiz_title}}</h4>
              <p class="card-text text-center">{{$quiz->quiz_desc}}</p>
              <div class="col-12"><span class="oi oi-inbox mr-1 ml-1"></span> <span>{{$quiz->course}} {{$quiz->section}}</span></div>
              <div class="col-12"><span class="oi oi-calendar mr-1 ml-1"></span> <span>{{ \Carbon\Carbon::parse($quiz->quiz_date)->format('F j, Y') }}, {{ \Carbon\Carbon::parse($quiz->quiz_date)->format('l') }}</span></div>
              <div class="col-12 mb-1"><span class="oi oi-clock mr-1 ml-1"></span> <span>{{\Carbon\Carbon::parse($quiz->time_start)->format('g:i a') }} - {{\Carbon\Carbon::parse($quiz->time_end)->format('g:i a') }}</span></div>
              
              <form action="{{ route('prof.quiz.EditQuiz') }}" method="get">
                <input type="hidden" name="quiz_id" value="{{$quiz->quiz_id}}">
                <div class="text-center">
                  <button type="submit" name="submit" class="button bg-green"><span>Questions</span></button>
              </form>
              <form action="{{ route('profquiz.EditSchedule') }}" method="get">
                  <input type="hidden" name="quiz_sched_id" value="{{$quiz->quiz_sched_id}}">
                  <input type="hidden" name="quiz_id" value="{{$quiz->quiz_id}}">
                  <button name="button" class="button bg-red"><span>Schedule</span></button>
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
