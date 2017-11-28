@extends('layouts.profApp')

@section('title', 'Home')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="homeContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-yellow text-white h6">
            <span class="oi oi-star" title="Rank" aria-hidden="true"></span> Class Standing - Overall
          </div>
          <div class="card-header bg-dark-grey">
            <nav class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              @if($classes->isEmpty())
                <p class="h5 text-white pl-3">
                  No Class Found
                </p>
              @else
                @foreach ($classes as $class)
                  <a class="nav-item nav-link active" id="nav-{{ $class->crs_sec }}-tab" data-toggle="tab" href="#nav-{{ $class->crs_sec }}" role="tab" aria-controls="nav-{{ $class->crs_sec }}" aria-expanded="true"><span class="oi oi-people" title="{{ $class->crs_sec }}" aria-hidden="true"></span> {{ $class->crs_sec }}</a>
                @endforeach
              @endif
            </nav>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-BSIT3A" role="tabpanel" aria-labelledby="nav-BSIT3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      @if($students->isEmpty())
                      <p class="h3 pt-3">
                        No Students Found
                      </p>
                      @else
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th scope="row">{{ $student->stud_id }}</th>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->degree_Program }}-{{ $student->section }}</td>
                        <td>NO SCORE</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-green text-white h6">
            <span class="oi oi-spreadsheet" title="Quizzes" aria-hidden="true"></span> Scheduled Quizzes
          </div>
          <div class="card-body">
            @if($quizzes->isEmpty())
              <h5 class="card-title">No Quizzes Found</h5>
              <a href="profCreateQuiz" class="btn bg-green border-green btn-primary">Create Here...</a>
            @else
              @foreach ($quizzes as $quiz)
                <h5 class="card-title">{{ $quiz->title }}</h5>
                <p class="card-text">{{ $quiz->sched_date }} - <b>{{ $quiz->sched_time }}</b></p>
                <a href="profEditQuiz" class="btn bg-green border-green btn-primary">Edit Quiz</a>
                <hr />
              @endforeach
            @endif
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-blue text-white h6">
            <span class="oi oi-folder" title="Database" aria-hidden="true"></span> Recent Databases
          </div>
          <div class="card-body">
            <h5 class="card-title">BSIT - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
            <hr />
            <h5 class="card-title">BSCS - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
            <hr />
            <h5 class="card-title">BSIS - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
</div>

@endsection
