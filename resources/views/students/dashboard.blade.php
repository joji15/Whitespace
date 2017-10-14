@extends('layouts.studentapp')

@section('title', 'Home')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="homeContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;" id="homeTitle">
      <code>Name</code>, let your journey begin.
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-red">
          <div class="card-body text-white bg-red">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="classList" aria-hidden="true"></span> Class List</h4>
            <p class="card-text">View list of classes and join.</p>
          </div>
          <a href="studentsClassList"><div class="card-footer border-red">
            Connect Here! <span class="oi oi-link-intact" title="viewClassList" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-yellow">
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-bookmark" title="continueLesson" aria-hidden="true"></span> Keep on...</h4>
            <p class="card-text">Last lesson taken can be accessed here.</p>
          </div>
          <a href="studentsLesson"><div class="card-footer border-yellow">
            Continue Lesson Here <span class="oi oi-link-intact" title="viewLastLesson" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue">
          <div class="card-body text-white bg-blue">
            <h4 class="card-title"><span class="oi oi-calendar" title="scheduledQuizzes" aria-hidden="true"></span> Quizzes</h4>
            <p class="card-text">View scheduled quizzes and take what's scheduled for today. You can also review your past quizzes here. </p>
          </div>

          <a href="studentsScheduledQuizzes">
              <div class="card-footer border-blue">
                View Scheduled Quizzes <span class="oi oi-link-intact" title="viewScheduledQuizzes" aria-hidden="true"></span>
              </div>
          </a>

        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-green">
          <div class="card-body text-white bg-green">
            <h4 class="card-title"><span class="oi oi-star" title="studRankings" aria-hidden="true"></span> Rankings</h4>
            <p class="card-text">View full list of ranking in the class you belong as of the latest quiz taken.</p>
          </div>
          <a href="studentsRankings"><div class="card-footer border-green">
            See full list <span class="oi oi-link-intact" title="viewRankings" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-8 col-lg-8 mt-4">

      </div>
    </div>
  </div>
</div>

@endsection
