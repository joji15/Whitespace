@extends('layouts.studentapp')

@section('title', 'Scheduled Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2 text-primary" style="font-family:Segoe UI Light; ">
      <span class="oi oi-document"></span> Scheduled Quizzes
    </p>
    <hr />
    <div class="row">
      @foreach($scheduled_quiz as $sq)
      <div class="col-12 col-md-6 col-lg-3 mt-2">
        <div class="card border-primary">
          <div class="card-body text-white bg-primary">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> {{$sq->quiz_title}}</h4>
            <h6><span class="card-text oi oi-book"></span> {{$sq->quiz_desc}}</h6>
            <h6><span class="card-text oi oi-calendar"></span> {{$sq->quiz_date}}</h6>
            <h6><span class="card-text oi oi-clock"></span> {{$sq->time_start}} - {{$sq->time_end}}</h6>
          </div>
          <div class="card-footer border-primary">
            <a href="studentsTakeQuiz" style="text-decoration:none";>
              <div class="row">
                <div class="col-10">Take this quiz!</div>
                <div class="col-2 text-right"><span class="oi oi-arrow-circle-right"></span></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-12 mt-2">
        <hr/>
        <p class="h2 text-info" style="font-family:Segoe UI Light; ">
          <span class="oi oi-circle-check"></span> Finished Quizzes
        </p>
        <hr/>
        <div class="row">
          @foreach($finished_quiz as $fq)
          <div class="col-12 col-md-6 col-lg-3 mt-2">
            <div class="card border-info">
              <div class="card-body text-white bg-info">
                <h4 class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> {{$fq->quiz_title}}</h4>
                <h6><span class="card-text oi oi-book"></span> {{$fq->quiz_desc}}</h6>
                <h6><span class="card-text oi oi-calendar"></span> {{$fq->quiz_date}}</h6>
                <h6><span class="card-text oi oi-badge"></span> &nbsp; Score</h6>
              </div>
              <div class="card-footer border-info">
                <a href="studentsViewResult" style="text-decoration:none";>
                  <div class="row">
                    <div class="col-10">View Result</div>
                    <div class="col-2 text-right"><span class="oi oi-arrow-circle-right"></span></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
