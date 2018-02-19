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
      <div class="col-12 col-md-8 col-lg-7  mb-4">
        <div class="card border-blue-grey">
          <div class="card-body border-blue-grey" style="overflow-y: auto;">
            <p class="card-title h4 border-yellow"><span class="oi oi-star text-yellow" title="Quiz" aria-hidden="true"></span> Top 10 Students</p>
            <p class="card-text">Below are your top 10 students across all of your classes this semester.</p>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-BSIT3A" role="tabpanel" aria-labelledby="nav-BSIT3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse">
                    <tr>
                      @if($classStudent->count() == 0)
                      <p class="h3 pt-3">
                        No Students Found
                      </p>
                      @else
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course &amp; Section</th>
                      <th>Score</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @if($classStudent->count() == 0)
                    
                    @else
                    @php $p = 1 @endphp
                    @foreach ($classStudent as $student)
                    @if($p != 11)
                    <tr>
                      <th scope="row">{{ $p++ }}</th>
                      <td>{{ $student->student_lname }}, {{ $student->student_fname }}</td>
                      <td>{{ $student->course }}-{{ $student->section }}</td>
                      <td>NO SCORE</td>
                    </tr>
                    @else
                    @break
                    @endif
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-5  mb-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <p class="card-title h4 border-yellow"><span class="oi oi-clock text-green" title="Quiz" aria-hidden="true"></span> Scheduled Quizzes</p>
            <p class="card-text">Below are the list of your Scheduled Quizzes for your classes.</p>
            <div class="col-12" style="overflow: auto; height: 225px">
              @if($quizzes->isEmpty())
              <h5 class="card-title">No Quizzes Found</h5>
              <a href="profCreateQuiz" class="btn bg-green border-green btn-primary">Create Here...</a>
              @else
              @foreach ($quizzes as $quiz)
              <form action="{{ route('prof.quiz.EditQuiz') }}" method="get">
                <h5 class="card-title">{{ $quiz->quiz_title }}</h5>
                <input type="hidden" name="quiz_id" value="{{$quiz->quiz_id}}">
                <button type="submit" name="submit" class="btn btn-sm bg-green text-white"><span class="oi oi-pencil"></span> Edit Quiz</button>
              </form>
              <hr />
              @endforeach
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="{{ route('prof.quiz.CreateQuiz') }}" class="bg-blue-grey text-green">
                <div class="card-footer border-green bg-blue-grey" style="border-radius: 0px;">
                  Want to create a new Quiz? Click Here... <span class="oi oi-link-intact" title="linkQuizzes" aria-hidden="true"></span>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a href="{{ route('prof.quiz.ScheduleQuiz') }}" class="bg-blue-grey text-blue">
                <div class="card-footer border-blue bg-blue-grey ">
                  Want to add schedule for a Quiz? Click Here... <span class="oi oi-link-intact" title="linkQuizzes" aria-hidden="true"></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
</div>

@endsection
