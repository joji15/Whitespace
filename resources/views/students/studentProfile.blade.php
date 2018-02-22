@extends('layouts.studentapp')

@section('title', 'Student Profile')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentProfileContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-person text-red" title="Student Profile" aria-hidden="true"></span> Your Profile
    </p>
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="profile-quiz-tab" data-toggle="pill" href="#profile-quiz" role="tab" aria-controls="profile-quiz" aria-selected="true"><span class="oi oi-spreadsheet text-yellow" title="Profile Quiz" aria-hidden="true"></span> Quizzes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-history-tab" data-toggle="pill" href="#profile-history" role="tab" aria-controls="profile-history" aria-selected="false"><span class="oi oi-clock text-blue-grey" title="Profile History" aria-hidden="true"></span> Query History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-download-tab" data-toggle="pill" href="#profile-download" role="tab" aria-controls="profile-download" aria-selected="false"><span class="oi oi-data-transfer-download text-green" title="Profile Download" aria-hidden="true"></span> Downloadables</a>
          </li>
        </ul>
        <hr />
      </div>
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="profile-quiz" role="tabpanel" aria-labelledby="profile-quiz-tab">
            <p class="h5 text-primary" style="font-family:Segoe UI Light; ">
              <span class="oi oi-document"></span> Scheduled Quizzes
            </p>
            <hr />
            <div class="row">
              @if(!$scheduled_quiz->isEmpty())
              @foreach($scheduled_quiz as $sq)
              <div class="col-12 col-md-6 col-lg-3 mt-2">
                <div class="card border-primary">
                  <form action="{{route('student.Profile.Quiz')}}" method="POST">
                    <div class="card-body text-white bg-primary">
                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                      <input type="hidden" name="quiz_id" value="{{$sq->quiz_id}}" id="quiz_id">
                      <input type="hidden" name="quiz_date" value="{{$sq->quiz_date}}" id="quiz_date">
                      <input type="hidden" name="time_start" value="{{$sq->time_start}}" id="time_start">
                      <input type="hidden" name="time_end" value="{{$sq->time_end}}" id="time_end">
                      <h5 class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> {{$sq->quiz_title}}</h5>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-book"></span> {{$sq->quiz_desc}}</p>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-calendar"></span> {{ \Carbon\Carbon::parse($sq->quiz_date)->format('F j, Y') }}</p>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-clock"></span> {{\Carbon\Carbon::parse($sq->time_start)->format('g:i a') }} - {{\Carbon\Carbon::parse($sq->time_end)->format('g:i a') }}</p>
                    </div>
                    <div class="card-footer border-blue bg-white p-0">
                      <input type="hidden" name="quiz_id" value="{{$sq->quiz_id}}">
                      <input type="hidden" value="{{$sq->quiz_sched_id}}" name="quizSchedID">
                      <button class="btn bg-transparent" type="submit">
                        <div class="row">
                          <div class="col-10 text-primary">Take this quiz! <span class="oi oi-link-intact"></span></div>
                        </div>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              @endforeach
              @else
              <marquee behavior="alternate" class="h1" style="font-weight: lighter;">You have no scheduled quizzes.</marquee>
              @endif
            </div>
            <br /><br />
            <p class="h5 text-primary" style="font-family:Segoe UI Light; ">
              <span class="oi oi-document"></span> Finished Quizzes
            </p>
            <hr />
            <div class="row">
              @if(!$finished_quiz->isEmpty())
              @foreach ($finished_quiz as $fQ)
              <div class="col-12 col-md-6 col-lg-3 mt-2 mb-4">
                <div class="card border-blue-grey">
                  <form action="{{route('student.Profile.Quiz.ReviewResult')}}" method="POST">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="card-body bg-white">
                      <h5 class="card-title"><span class="oi oi-spreadsheet" title="scheduledQuiz" aria-hidden="true"></span> {{$fQ->quiz_title}}</h5>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-book"></span> {{$fQ->quiz_desc}}</p>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-calendar"></span> {{ \Carbon\Carbon::parse($fQ->quiz_date)->format('F j, Y') }}</p>
                      <p class="mb-1" style="font-weight: normal; font-size: 13px;"><span class="card-text oi oi-clock"></span> Score: {{$fQ->score}}</p>
                    </div>
                    <div class="card-footer border-warning bg-blue-grey p-0">
                      <input type="hidden" name="quiz_id" value="{{$fQ->quiz_id}}">
                      <button class="btn bg-transparent" type="submit">
                        <div class="row">
                          <a class="col-10 text-warning">Review Quiz <span class="oi oi oi-link-intact"></span></a>
                          <div class="col-2 text-right"></div>
                        </div>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              @endforeach
              @else
              <marquee behavior="alternate" class="h1" style="font-weight: lighter;">You have no finished quizzes yet.</marquee>
              @endif
            </div>
          </div>
          <div class="tab-pane fade" id="profile-history" role="tabpanel" aria-labelledby="profile-history-tab">
            <div class="row">
              <div class="col-12">
                <p class="h4" style="font-family:Segoe UI Light; font-weight:lighter;">
                  <span class="oi oi-clock text-blue" title="File" aria-hidden="true"></span> Query History
                </p>
                <br />
                <table class="table table-sm">
                  <thead class="table-inverse" style="font-size: 12px;">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Query</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Copy</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!$history->isEmpty())
                    <p class="d-none">{{$i = 1}}</p>
                    @foreach($history as $hl)
                    <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td><textarea class="textArea" contenteditable="true" readonly style="resize:none; width:100%; border:none;">{{ $hl->query_text }}</textarea></td>
                      <td>{{ $hl->created_at }}</td>
                      <td><button class="copy btn btn-primary btn-sm"><span class="oi oi-clipboard" title="copy" aria-hidden="true"></span> Copy</button></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <th scope="row" colspan="4">You have no queries in your history.</th>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile-download" role="tabpanel" aria-labelledby="profile-download-tab">
            <div class="row">
              <div class="col-12">
                <p class="h4" style="font-family:Segoe UI Light; font-weight:lighter;">
                  <span class="oi oi-data-transfer-download text-green" title="File" aria-hidden="true"></span> Downloadable files from your Professor
                </p>
                <br />
                <table class="table table-hover">
                  <thead class="thead-inverse table-sm text-center">
                    <tr>
                      <th>File Name</th>
                      <th>Date Uploaded</th>
                      <th class="text-center">Download</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($downloads->count() > 0)
                    @foreach($downloads as $down)
                    <tr>
                      <th scope="row">{{$down->file_name}}</th>
                      <td>{{$down->uploaded_at}}</td>
                      <td class="text-center"><a href="/up_file/{{$down->file_name}}" download="{{$down->file_name}}"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <th colspan="4">Your class seem to have no uploaded files, wait for your teacher to upload one.</th>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>

.rotate-90 {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.textArea:focus{
  outline-width: 0;
}

</style>
<script>
  $('.copy').tooltip({
    trigger: 'click',
    placement: 'left'
  });

  let allButtons = Array.from(document.querySelectorAll('.copy'));
  allButtons.forEach((item)=>{
    item.addEventListener('click',(ev)=>{
      let textArea = ev.target.closest('tr').querySelector('.textArea');
      textArea.focus();
      let text =  textArea.value; textArea.setSelectionRange(0,text.length);
      document.execCommand('copy');
      text =  textArea.value; textArea.setSelectionRange(0,0);
      
    })
  })

  // $(".copybtn").click(function() {
  //   var query = document.querySelector('.querystr');
  //   query.select();
  //   document.execCommand('copy');
  // });
</script>
<script type="text/javascript">
  function preventBack() {
    window.history.forward();
  }
  setTimeout("preventBack()",0);
  window.onunload = function(){null};
</script>


@endsection
