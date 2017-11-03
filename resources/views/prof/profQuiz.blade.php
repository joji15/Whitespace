@extends('layouts.profApp')

@section('title', 'Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="quizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Manage Quizzes
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-green">
            <h4 class="card-title"><span class="oi oi-magnifying-glass" title="View Quiz" aria-hidden="true"></span> View Quizzes</h4>
            <p class="card-text">View past quizzes to review the scores of the students.</p>
          </div>
          <a href="/prof/Quiz/ViewQuiz"><div class="card-footer border-blue-grey">
            View Quizzes here... <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title"><span class="oi oi-plus" title="Create Quiz" aria-hidden="true"></span> Create Quiz</h4>
            <p class="card-text">Create a new quiz for your student to answer.</p>
          </div>
          <a href="/prof/Quiz/CreateQuiz"><div class="card-footer border-blue-grey">
            Create Quiz here... <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-orange">
            <h4 class="card-title"><span class="oi oi-pencil" title="Edit Quiz" aria-hidden="true"></span> Edit Quizzes</h4>
            <p class="card-text">Edit scheduled quizzes. Can edit the time, the questions and the answers.</p>
          </div>
          <a href="/prof/Quiz/EditQuiz"><div class="card-footer border-blue-grey">
            Edit Quizzes here... <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
