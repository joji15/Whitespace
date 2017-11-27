@extends('layouts.adminapp')

@section('title', 'Schedule Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="editQuizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Schedule Quizzes
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mt-4">
        <div class="card border-dark mb-3">
          <div class="card-header">
            <h6><strong>Schedule Quiz</strong></h6>
          </div>
          <div class="card-body bg-light"  style="padding:10px;">
            <form class="" action="addSchedule" method="post">
              {{csrf_field()}}

              <div class="form-group">
                <label for="">C/Y/S : School Year</label>
                <select class="cys form-control custom-select" name="class_id">
                  <option value="0" disabled="true" selected="true">--Select--</option>
                  @foreach($class as $class)
                  <option value="{{$class->class_id}}">{{$class->course}} {{$class->section}} : {{$class->school_year}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="control-label " for="date">Date</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="oi oi-calendar"></i>
                  </div>
                  <input class="form-control" id="date" name="quiz_date" placeholder="YYYY-MM-DD" type="text"/>
                </div>
              </div>
              <div class="form-group" id="timeOnly">
                <label for="date">Time Start</label>
                <input type="text" class="time start form-control" name="time_start"/>
                <label for="date">Time End</label>
                <input type="text" class="time end form-control" name="time_end"/>
              </div>

          </div>
          <div class="card-footer text-center">
            <button type="submit" name="submit" class="btn btn-primary mr-3" style="width:30%"> Save </button>
            <button type="reset" name="button" class="btn btn-danger" style="width:33%"> Clear </button>
          </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-8 mt-4">
        <div class="card border-dark-grey mb-3">
          <div class="card-header text-white bg-dark">
            <h6 class="text-right">Scheduled Quizzes</h6>
          </div>
          <div class="card-body" style="overflow:auto; padding:0%;">
            <table class="table table-hover table-sm">
              <thead class="thead-inverse text-center">
                <tr>
                  <th class="text-center">C/Y/S</th>
                  <th class="text-center">School Year</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Time Start</th>
                  <th class="text-center">Time End</th>
                </tr>
              </thead>
              <tbody>
                @foreach($schedule as $sched)
                <tr>
                  <th scope="row">{{$sched -> course}} {{$sched -> section}}</th>
                  <td>{{$sched -> school_year}}</td>
                  <td>{{$sched -> quiz_date}}</td>
                  <td>{{$sched -> time_start}}</td>
                  <td>{{$sched -> time_end}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="quiz_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

<script src="/js/jquery.timepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.timepicker.css" />

<script src="/js/datepair.js"></script>
<script src="/js/jquery.datepair.js"></script>

<script>
    $('#timeOnly .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    var timeOnlyEl = document.getElementById('timeOnly');
    var timeOnlyDatepair = new Datepair(timeOnlyEl);
</script>

@endsection
