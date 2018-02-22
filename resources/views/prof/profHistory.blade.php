@extends('layouts.profApp')

@section('title', 'Student History')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="historyContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-clock text-blue" title="Report/Audit Trait" aria-hidden="true"></span> Student Query History of {{$class[0]->course}}-{{$class[0]->section}}: {{$class[0]->school_year}}
    </p>
    <div class="row">
      <div class="col-3" style="height: 500px; overflow: auto;">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach ($student as $st)
          @if ($loop->first)
          <!-- FIRST ACTIVE STUDENT TAB -->
          <a class="nav-link active" id="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}-tab" data-toggle="pill" href="#v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" role="tab" aria-controls="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" aria-selected="true">{{$st->student_lname}}, {{$st->student_fname}}</a>
          @else
          <!-- EVERY OTHER STUDENT TABS -->
          <a class="nav-link" id="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}-tab" data-toggle="pill" href="#v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" role="tab" aria-controls="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" aria-selected="false">{{$st->student_lname}}, {{$st->student_fname}}</a>
          @endif
          @endforeach
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          @foreach ($student as $st)
          @if ($loop->first)
          <!-- FIRST ACTIVE STUDENT CONTENT -->
          <div class="tab-pane fade show active" id="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" role="tabpanel" aria-labelledby="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}-tab">
            @php $i = 1 @endphp
            <!-- HISTORY TABLES -->
            <table class="table table-sm">
              <thead class="thead-inverse">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Query</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Copy</th>
                </tr>
              </thead>
              <tbody>
                @foreach($history as $hs)
                @if ($hs->student_id == "")
                <tr>
                  <th scope="row" colspan="4">You have no queries in your history.</th>
                </tr>
                @else
                @if ($hs->student_id == $st->student_id)
                <tr>
                  <th scope="row">{{ $i++ }}</th>
                  <td><textarea class="textArea" contenteditable="true" readonly style="resize:none; width:100%; border:none;">{{ $hs->query_text }}</textarea></td>
                  <td>{{ $hs->created_at }}</td>
                  <td><button class="copy btn btn-primary btn-sm"><span class="oi oi-clipboard" title="copy" aria-hidden="true"></span> Copy</button></td>
                </tr>
                @else
                @continue
                @endif
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
          @else
          <div class="tab-pane fade" id="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}" role="tabpanel" aria-labelledby="v-pills-{{$st->student_id}}-{{kebab_case($st->student_lname)}}-tab">
            @php $i = 1 @endphp
            <!-- HISTORY TABLES -->
            <table class="table table-sm">
              <thead class="thead-inverse">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Query</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Copy</th>
                </tr>
              </thead>
              <tbody>
                @foreach($history as $hs)
                @if ($hs->query_text == "")
                <tr>
                  <th scope="row" colspan="4">You have no queries in your history.</th>
                </tr>
                @else
                @if ($hs->student_id == $st->student_id)
                <tr>
                  <th scope="row">{{ $i++ }}</th>
                  <td><textarea class="textArea" contenteditable="true" readonly style="resize:none; width:100%; border:none;">{{ $hs->query_text }}</textarea></td>
                  <td>{{ $hs->created_at }}</td>
                  <td><button class="copy btn btn-primary btn-sm"><span class="oi oi-clipboard" title="copy" aria-hidden="true"></span> Copy</button></td>
                </tr>
                @else
                @continue
                @endif
                @endif
                @endforeach
              </tbody>
            </table>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

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

@endsection
