@extends('layouts.profApp')

@section('title', 'Home')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="homeContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-home text-blue" title="Professor Dashboard" aria-hidden="true"></span> Welcome to your Dashboard
    </p>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12  mb-4">
        <div class="card border-blue-grey">
          <div class="card-body border-blue-grey" style="overflow-y: auto;">
            <h4 class="card-title border-yellow"><span class="oi oi-star text-yellow" title="Quiz" aria-hidden="true"></span> Top 5 Students</h4>
            <p class="card-text">Below are your top 5 students across all of your classes this semester.</p>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-BSIT3A" role="tabpanel" aria-labelledby="nav-BSIT3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      @if($students->count() == 0)
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
                    @if($students->count() == 0)
                    
                    @else
                    @foreach ($students as $student)
                    <tr>
                      <th scope="row">{{ $student->stud_id }}</th>
                      <td>{{ $student->student_name }}</td>
                      <td>{{ $student->degree_Program }}-{{ $student->section }}</td>
                      <td>NO SCORE</td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6  mb-4">
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
      <div class="col-12 col-md-6 col-lg-6  mb-4">
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
