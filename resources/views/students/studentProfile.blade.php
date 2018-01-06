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
            <a class="nav-link active" id="profile-quiz-tab" data-toggle="pill" href="#profile-quiz" role="tab" aria-controls="profile-quiz" aria-selected="true"><span class="oi oi-spreadsheet" title="Profile Quiz" aria-hidden="true"></span> Quizzes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-history-tab" data-toggle="pill" href="#profile-history" role="tab" aria-controls="profile-history" aria-selected="false"><span class="oi oi-clock" title="Profile History" aria-hidden="true"></span> Query History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-download-tab" data-toggle="pill" href="#profile-download" role="tab" aria-controls="profile-download" aria-selected="false"><span class="oi oi-data-transfer-download" title="Profile Download" aria-hidden="true"></span> Downloadables</a>
          </li>
        </ul>
        <hr />
      </div>
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="profile-quiz" role="tabpanel" aria-labelledby="profile-quiz-tab">
            <svg height="20" width="40">
              <line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->
              <circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->
              <line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->
              <line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->
              <line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->
            </svg>
            <svg height="20" width="40">
              <line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->
              <circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->
              <line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->
              <line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" />     <!-- | -->
            </svg>
            <svg height="20" width="40">
              <line x1="13" y1="0" x2="13" y2="20" stroke="black" stroke-width="2" />     <!-- | -->
              <line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />     <!-- —— -->
              <line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->
              <line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->
            </svg>
            <svg height="20" width="40">
              <line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" /> <!-- —— -->
              <line x1="20" y1="0" x2="20" y2="20" stroke="black" stroke-width="2" /> <!-- | -->
              <line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" /> <!-- | -->
            </svg>


            <br />
            <svg height="20" width="40" class="rotate-90">
              <line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->
              <circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->
              <line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->
              <line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->
              <line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->
            </svg>
            <svg height="20" width="40" class="rotate-90">
              <line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->
              <circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->
              <line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->
              <line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" />     <!-- | -->
            </svg>
            <svg height="20" width="40" class="rotate-90">
              <line x1="13" y1="0" x2="13" y2="20" stroke="black" stroke-width="2" />     <!-- | -->
              <line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />     <!-- —— -->
              <line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->
              <line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->
            </svg>
            <svg height="20" width="40" class="rotate-90">
              <line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" /> <!-- —— -->
              <line x1="20" y1="0" x2="20" y2="20" stroke="black" stroke-width="2" /> <!-- | -->
              <line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" /> <!-- | -->
            </svg>
            <br />

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
                        <td class="text-center"><a href="up_file/{{$down->file_name}}" download="{{$down->file_name}}"><span class="oi oi-data-transfer-download" title="Download this file" aria-hidden="true"></span></a></td>
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

</style>

@endsection
