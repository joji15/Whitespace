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
      <div class="col-12 col-lg-6 mt-4">
        <div class="card border-silver">
          <div class="card-header bg-purple text-white">
            <div class="card-title h5">
              <span class="oi oi-bullhorn"></span> Upcoming Quizzes
            </div>
          </div>
          <div class="card-body">

          </div>
          <div class="card-footer bg-lightpurple">

          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-4">
        <div class="card border-whitesmoke">
          <div class="card-header bg-customlightblue">
            <div class="card-title h5 text-white">
              <span class="oi oi-copywriting"></span> Quiz Results
            </div>
          </div>
          <div class="card-body">

          </div>
          <div class="card-footer bg-lighterblue">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
