@extends('layouts.profApp')

@section('title', 'Schedule Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="scheduleQuizContent">
	<div class="container-fluid contentMargin">
		<br />
		<div class="row">
			<div class="col-12">
				<p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
					<span class="oi oi-calendar text-purple" title="Schedule Quiz" aria-hidden="true"></span> Quiz Schedules
				</p>
				 <div class="row">
		        	<div class="col-12">
				    	@if($errors->any())
							<div class="alert alert-danger alert-dismissable ">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Error</strong> {{$errors->first()}}
							</div>
						@endif
						<!--@if (\Session::has('msg'))
						    <div class="alert alert-success">
						        <ul>
						            <li>{{\Session::get('msg')}}</li>
						        </ul>
						    </div>
						@endif-->
		        	</div>
		        </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-5 mt-4">
						<div class="card border-dark mb-3">
							<div class="card-header">
								<h6><strong>Add Schedule</strong></h6>
							</div>
							<form class="" action="{{ route('prof.quiz.ScheduleQuiz.add')}}" method="post">
								<input type="hidden" value="{{ csrf_token() }}" name="_token">
								<div class="card-body bg-light"  style="padding:10px;">
									<div class="form-group">
										<label for="">Quiz</label>
										<select class="cys form-control custom-select" name="quiz_id">
											<option value="" disabled="true" selected="true">--Select--</option>
											@foreach($quiz_title as $q)
											<option value="{{$q->quiz_id}}">{{$q -> quiz_title}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="">C/Y/S</label>
										<select class="cys form-control custom-select" name="class_id">
											<option value="0" disabled="true" selected="true">--Select--</option>
											@foreach($class as $class)
											<option value="{{$class->class_id}}">{{$class->course}} {{$class->section}}</option>
											@endforeach
										</select>
									</div>
									@php $now = \Carbon\Carbon::now()->toDateString() @endphp
									<div class="form-group">
										<label class="control-label " for="date">Date</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="oi oi-calendar"></i>
											</div>
											<input class="form-control" min="{{$now}}" id="date" name="quiz_date" type="date"  />
										</div>
									</div>
									<div class="form-group" id="timeOnly">
						              <label for="time_start">Time Start</label>
						              <input type="time" class="time start  form-control" id="time_start" name="time_start"  />
						              <label for="time_end">Time End</label>
						              <input type="time" class="time end form-control" id="time_end" name="time_end"/>
						            </div>
								</div>
								<div class="card-footer text-center">
									<button type="submit" name="submit" class="btn btn-primary mr-3" style="width:30%"> Save </button>
									<button type="reset" name="button" class="btn btn-danger" style="width:33%"> Clear </button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-7 mt-4">
						<div class="card border-dark-grey mb-3">
							<div class="card-header text-white bg-dark-grey">
								<h6 class="text-right"> <span class="oi oi-pin text-red"></span> Scheduled Quizzes for today</h6>
							</div>
							<div class="card-body" style="overflow:auto; padding:0%;">
								<table class="table table-hover table-sort table-sort-search table-sort-show-search-count table-sm">
									<thead>
										<tr>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
										</tr>
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
<script src="/js/jquery.timepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.timepicker.min.css">

<script src="/js/jquery.datepair.min.js"></script>

<script>
    $('#timeOnly .time').timepicker({
        'showDuration': true,
        'timeFormat': 'H:i:s'
    });

    var timeOnlyEl = document.getElementById('timeOnly');
    var timeOnlyDatepair = new Datepair(timeOnlyEl);

</script>
@endsection