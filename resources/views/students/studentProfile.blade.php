@extends('layouts.studentapp')

@section('title', 'Student Profile')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentProfileContent">
  <div class="container-fluid contentMargin">
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
    </div>
    <div class="row">
      <div class="col-12 col-md-8 col-lg-8 mt-4">

      </div>
    </div>
  </div>
</div>

@endsection
