@extends('layouts.studentapp')

@section('title', 'Scheduled Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Scheduled Quizzes
    </p>
    <hr />
    <div class="row">
  <!--   <div class="col-12 col-md-3 col-lg-3 mt-4">
        <div class="card border-silver">
          <div class="card-body bg-whitesmoke">
            <div><h4 class="card-title text-center">Quiz 1</h4></div>
            <div><span class="oi oi-calendar" title="scheduledDate" aria-hidden="true"> Date</span></div>
            <div><span class="oi oi-clock" title="scheduledTime" aria-hidden="true"> Time</span></div>
            <div><span class="oi oi-contrast" title="status" aria-hidden="true"> Status</span></div>
            <hr/>
              <a href="studentsTakeQuiz" style="text-decoration:none">
                <div class="row">
                  <div class="col-10">Take this quiz!</div>
                  <div class="col-2"><i class="oi oi-arrow-circle-right"></i></div>
                </div>
              </a>
          </div>
        </div>
      </div> -->
  <!--    <div class="col-12 col-md-3 col-lg-3 mt-4">
        <div class="card border-silver">
          <div class="card-body bg-whitesmoke">
            <div><h4 class="card-title text-center">Quiz 2</h4></div>
            <div><span class="oi oi-calendar" title="scheduledDate" aria-hidden="true"> Date</span></div>
            <div><span class="oi oi-clock" title="scheduledTime" aria-hidden="true"> Time</span></div>
            <div><span class="oi oi-contrast" title="status" aria-hidden="true"> Status</span></div>
            <hr/>
              <a href="studentsTakeQuiz" style="text-decoration:none">
                <div class="row">
                  <div class="col-10">Take this quiz!</div>
                  <div class="col-2"><i class="oi oi-arrow-circle-right"></i></div>
                </div>
              </a>
          </div>
        </div>
      </div> -->
<!--      <div class="col-12 col-md-3 col-lg-3 mt-4">
        <div class="card border-silver">
          <div class="card-body bg-whitesmoke">
            <div><h4 class="card-title text-center">Quiz 3</h4></div>
            <div><span class="oi oi-calendar" title="scheduledDate" aria-hidden="true"> Date</span></div>
            <div><span class="oi oi-clock" title="scheduledTime" aria-hidden="true"> Time</span></div>
            <div><span class="oi oi-contrast" title="status" aria-hidden="true"> Status</span></div>
            <hr/>
              <a href="studentsTakeQuiz" style="text-decoration:none">
                <div class="row">
                  <div class="col-10">Take this quiz!</div>
                  <div class="col-2"><i class="oi oi-arrow-circle-right"></i></div>
                </div>
              </a>
          </div>
        </div>
      </div> -->
<!--      <div class="col-12 col-md-3 col-lg-3 mt-4">
        <div class="card border-silver">
          <div class="card-body bg-whitesmoke">
            <div><h4 class="card-title text-center">Quiz 4</h4></div>
            <div><span class="oi oi-calendar" title="scheduledDate" aria-hidden="true"> Date</span></div>
            <div><span class="oi oi-clock" title="scheduledTime" aria-hidden="true"> Time</span></div>
            <div><span class="oi oi-contrast" title="status" aria-hidden="true"> Status</span></div>
            <hr/>
              <a href="studentsTakeQuiz" style="text-decoration:none">
                <div class="row">
                  <div class="col-10">Take this quiz!</div>
                  <div class="col-2"><i class="oi oi-arrow-circle-right"></i></div>
                </div>
              </a>
          </div>
        </div>
      </div> -->

      <div class="col-sm-3">
        <div class="card border-info">
          <div class="card-body text-white bg-info">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> Quiz 1</h4>
            <h6><span class="card-text oi oi-book"></span> SQL Introduction</h6>
            <h6><span class="card-text oi oi-calendar"></span> September 4, 2017</h6>
            <h6><span class="card-text oi oi-clock"></span> 9:00 AM</h6>
          </div>
          <a href="studentsTakeQuiz">
            <div class="card-footer border-info">
            Take Quiz! <span class="oi oi-arrow-circle-right" title="viewScheduledQuizzes" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border-info">
          <div class="card-body text-white bg-info">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="classList" aria-hidden="true"></span> Quiz 2</h4>
            <h6><span class="card-text oi oi-book"></span> SQL Fundamentals</h6>
            <h6><span class="card-text oi oi-calendar"></span> November 7, 2017</h6>
            <h6><span class="card-text oi oi-clock"></span> 10:00 AM</h6>
          </div>
          <a href="studentsTakeQuiz">
            <div class="card-footer border-info">
            Take Quiz! <span class="oi oi-arrow-circle-right" title="viewScheduledQuizzes" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border-info">
          <div class="card-body text-white bg-info">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="classList" aria-hidden="true"></span> Quiz 3</h4>
            <h6><span class="card-text oi oi-book"></span> SQL DML</h6>
            <h6><span class="card-text oi oi-calendar"></span> March 15, 2018</h6>
            <h6><span class="card-text oi oi-clock"></span> 11:00 AM</h6>
          </div>
          <a href="studentsTakeQuiz">
            <div class="card-footer border-info">
            Take Quiz! <span class="oi oi-arrow-circle-right" title="viewScheduledQuizzes" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card border-info">
          <div class="card-body text-white bg-info">
            <h4 class="card-title"><span class="oi oi-spreadsheet" title="classList" aria-hidden="true"></span> Quiz 4</h4>
            <h6><span class="card-text oi oi-book"></span> SQL DDL</h6>
            <h6><span class="card-text oi oi-calendar"></span> February 8, 2018</h6>
            <h6><span class="card-text oi oi-clock"></span> 12:00 AM</h6>
          </div>
          <a href="studentsTakeQuiz"><div class="card-footer border-info">
            Take Quiz! <span class="oi oi-arrow-circle-right" title="viewScheduledQuizzes" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
