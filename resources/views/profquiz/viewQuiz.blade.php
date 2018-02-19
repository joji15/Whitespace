@extends('layouts.profApp')

@section('title', 'View Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="viewQuizContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-spreadsheet text-blue" title="Student Profile" aria-hidden="true"></span> View Quiz
    </p>
    <div class="row">
      <div class="col-12">
        @foreach($question_info as $qi)
          <p class="h4" style="font-weight: lighter;">Title: {{$qi->quiz_title}}</p>
          <p class="h6" style="font-weight: lighter;">Description: {{$qi->quiz_desc}}</p>
        @endforeach
        <br>
        <div class="d-none">{{ $i = 1 }}</div>
        <div class="row">
          <div class="col-12">
            <table class="table table-striped table-hover">
              <thead class="thead-inverse">
                <tr>
                  <th>No.</th>
                  <th>Question</th>
                  <th>Choices</th>
                  <th>Answer</th>
                </tr>
              </thead>
              <tbody>
                @foreach($questions as $q)
                <tr>
                  <td rowspan="4">{{ $i++ }}</td>
                  <td rowspan="4">{{$q->question}}</td>
                  <td>{{$q->choice_A}}</td>
                  <td rowspan="4">{{ substr($q->correct_ans, 7) }}</td>
                </tr>
                <tr><td>{{$q->choice_B}}</td></tr>
                <tr><td>{{$q->choice_C}}</td></tr>
                <tr><td>{{$q->choice_D}}</td></tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
