@extends('layouts.studentapp')

@section('title', 'Student Dashboard')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentHomeContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-home text-blue" title="Simulator" aria-hidden="true"></span> Welcome to your Dashboard
    </p>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-7 mb-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <h4 class="card-title"><span class="oi oi-star text-yellow" title="Quiz" aria-hidden="true"></span> Top Quizzes</h4>
            <p class="card-text">Below are three of your highest quizzes.</p>
            <table class="table table-bordered table-hover" id="databaseTbl">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>No.</th>
                  <th>Quiz Name</th>
                  <th>Score</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                @if($quiz=0)
                  @foreach($quiz as $q)
                  <tr>
                    <th>{{ $q->num }}</th>
                    <td>{{ $q->name }}</td>
                    <td>{{ $q->score }}</td>
                    <td><button>See More...</button></td>
                  </tr>
                  @endforeach
                @else
                <tr>
                  <th colspan="4">You seem to haven't had any quizzes yet, wait for your teacher to make one, and your Top 3 will be shown here.</th>
                </tr>
                @endif
                <!-- <tr>
                  <th>1</th>
                  <td>SQL Statement</td>
                  <td>10/15</td>
                </tr> -->
              </tbody>
            </table>
          </div>
          <a href="studentsScheduledQuizzes" class="bg-blue-grey text-yellow">
              <div class="card-footer border-yellow">
                View All of your Quizzes <span class="oi oi-link-intact" title="linkQuizzes" aria-hidden="true"></span>
              </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-5 mb-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <h4 class="card-title"><span class="oi oi-clock text-green" title="history" aria-hidden="true"></span> Recent Queries</h4>
            <p class="card-text">Here are 3 of your most recent queries.</p>
            <table class="table table-bordered table-hover table-sm" id="databaseTbl">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>No.</th>
                  <th>Query Text</th>
                  <th>Date Created</th>
                </tr>
              </thead>
              <tbody>

                @if(!$history->isEmpty())
                  @php $p = 1 @endphp
                  @foreach($history as $h)
                  @if($p != 4)
                  <tr>
                    <th>{{ $p++ }}</th>
                    <td>{{ $h->query_text }}</td>
                    <td>{{ $h->created_at }}</td>
                  </tr>
                  @else
                  @break
                  @endif
                  @endforeach
                @else
                <tr>
                  <th colspan="3"></th>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
          <a href="{{ route('student.Profile') }}" class="bg-blue-grey text-green">
            <div class="card-footer border-green">
            See your full history <span class="oi oi-link-intact" title="linkhistory" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mb-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <h4 class="card-title"><span class="oi oi-calendar text-red" title="Quiz" aria-hidden="true"></span> Upcoming Quizzes</h4>
            <p class="card-text">These are your upcoming quizzes scheduled by your teacher</p>

          </div>
          <a href="studentsScheduledQuizzes" class="bg-blue-grey text-red">
            <div class="card-footer border-red">
              View All of your Scheduled Quizzes <span class="oi oi-link-intact" title="linkScheduledQuizzes" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mb-4">
        <div class="card border-blue-grey">
          <div class="card-body">
            <h4 class="card-title"><span class="oi oi-data-transfer-download text-purple" title="Download" aria-hidden="true"></span> Recent Files</h4>
            <p class="card-text">Below are 3 of the files that your teacher uploaded for you to download</p>
            <table class="table table-bordered table-hover table-sm" id="downloadtable">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>No.</th>
                  <th>File Name</th>
                  <th>Date Uploaded</th>
                  <th>Download</th>
                </tr>
              </thead>
              <tbody>
                @if(!$download->isEmpty())
                  <p class="d-none">{{ $dCtn = 1 }}</p>
                  @foreach($download as $d)
                  @if($dCtn != 4)
                  <tr>
                    <th>{{ $dCtn++ }}</th>
                    <td>{{ $d->file_name }}</td>
                    <td>{{ $d->uploaded_at }}</td>
                    <td class="text-center"><a href="/up_file/{{$d->file_name}}" download="{{$d->file_name}}"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                  </tr>
                  @else
                  @break
                  @endif
                  @endforeach
                @else
                <tr>
                  <th colspan="3"></th>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
          <a href="{{ route('student.Profile') }}" class="bg-blue-grey text-lightpurple">
            <div class="card-footer border-lightpurple">
              View All of your Downloadable Files <span class="oi oi-link-intact" title="linkdownload" aria-hidden="true"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.card-body{
   padding: 15px;
}

</style>

@endsection
