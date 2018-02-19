@extends('layouts.profApp')

@section('title', 'Edit Schedule')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="scheduleQuizContent">
  <div class="container-fluid contentMargin">
    <br />
    <div class="row">
      <div class="col-12">
        <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
          <span class="oi oi-calendar text-red" title="Schedule Quiz" aria-hidden="true"></span> Edit Quiz Schedule
        </p>
	    <div class="row">
	    	<div class="col-12">
	    		<div class="row">
	    			<div class="col-12 col-md-6 col-lg-4 mt-4">
	    				<div class="card border-dark mb-3">
				    	  <div class="card-header">
				    	  	 <h6><strong>Edit Schedule</strong></h6>
				    	  </div>
					    <form class="" action="/prof/Quiz/EditSchedule" method="post">
		                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
				    	  <div class="card-body bg-light"  style="padding:10px;">
				    	  	@foreach ($class_sched as $cs)
				    	  	   <input type="hidden" name="quiz_id" value="{{$cs -> quiz_sched_id}}">
				    	  	   <input type="hidden" name="course" value="{{$cs -> course}} {{$cs -> section}}">
				    	  	   <input type="hidden" name="title" value="{{$cs -> quiz_title}}">
				    	  	   <input type="hidden" name="old_date" value="{{$cs -> quiz_date}}">
				    	  	   <input type="hidden" name="old_start" value="{{$cs -> time_start}}">
				    	  	   <input type="hidden" name="old_end" value="{{$cs -> time_end}}">
						       <div class="form-group">
								@php $now = \Carbon\Carbon::now()->toDateString() @endphp						       	
				                <label class="control-label " for="date">Date</label>
				                <div class="input-group">
				                  <div class="input-group-addon">
				                    <i class="oi oi-calendar"></i>
				                  </div>
				                  <input class="form-control" id="date" name="quiz_date" type="date" value="{{$cs->quiz_date}}" min="{{$now}}" />
				                </div>
				              </div>
				              <div id="timeOnly" class="form-group">
				                <label for="time_start">Time Start</label>
				                <input type="time" class="time start form-control" id="time_start" name="time_start" value="{{$cs ->time_start}}" />
				                <label for="time_end">Time End</label>
				                <input type="time" class="time end form-control" id="time_end" name="time_end" value="{{$cs->time_end}}" />
				              </div>
				             @endforeach
					      </div>
					      <div class="card-footer text-center">
				            <button type="submit" name="submit" class="btn btn-primary mr-3" style="width:30%"> Save </button>
				            <button type="reset" name="button" class="btn btn-danger" style="width:33%"> Clear </button>
				          </div>
					   </form>
			    	  </div>
	    			</div>
	    			<div class="col-12 col-md-6 col-lg-8 mt-4">
	    				<div class="row">
	    					<div class="col-12 mb-3">
	    						<div class="card border-info">
	    							<div class="card-header text-right text-white bg-primary">
					            	   <h6><span class="oi oi-info" title="Quiz Information"></span> Quiz Information</h6>
					          	   </div>
					               <div class="card-body" style="overflow:auto; font-family: Menlo,Monaco,Consolas,'Liberation Mono','Courier New',monospace; font-size: 16px; text-align: justify; text-indent: 20px;" >
					            	   @foreach ($class_sched as $cs)
					            	   		<strong class="text-danger">{{$cs -> course}} {{$cs -> section}}</strong> will take their quiz entitled, <i>"{{$cs -> quiz_title}}"</i>, on {{ \Carbon\Carbon::parse($cs->quiz_date)->format('F j, Y') }}, <strong>{{ \Carbon\Carbon::parse($cs->quiz_date)->format('l') }}</strong> at exactly {{\Carbon\Carbon::parse($cs->time_start)->format('g:i a') }} and end at exactly {{\Carbon\Carbon::parse($cs->time_end)->format('g:i a') }}
					            	   @endforeach
					               </div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="row">
	    					<div class="col-12">
	    						<div class="card border-blue-grey">
	    							<div class="card-header text-right text-white bg-dark-grey">
					            	   <h6><span class="oi oi-align-left" title="List of classes with the similar quiz"></span> List of classes with the similar quiz</h6>
					          	   </div>
					               <div class="card-body" style="overflow:auto; padding: 0px;">
					            	   <table class="table table-hover table-sm" >
					            	   	<thead class="table-inverse">
					            	   		<tr>
					            	   			<th>C/Y/S</th>
					            	   			<th>Quiz Date</th>
					            	   			<th>Day</th>
					            	   			<th>Time Start</th>
					            	   			<th>Time End</th>
					            	   		</tr>
					            	   	</thead>
					            	   	<tbody>
					            	   		@php $ctr=0 @endphp
					            	   		@foreach ($quiz as $q)
					            	   			@if ($ctr > 0)
							            	   		<tr>
							            	   			<td>{{$q->course}} {{$q->section}}</td>
							            	   			<td>{{ \Carbon\Carbon::parse($cs->quiz_date)->format('F j, Y') }}</td>
							            	   			<td>{{ \Carbon\Carbon::parse($cs->quiz_date)->format('l') }}</td>
							            	   			<td>{{\Carbon\Carbon::parse($cs->time_start)->format('g:i a') }}</td>
							            	   			<td>{{\Carbon\Carbon::parse($cs->time_end)->format('g:i a') }}</td>
									            	   		</tr>
								            	   		@elseif($ctr < 0)
								            	   			<tr><td>There's no class with similar quiz</td></tr>
						            	   		@endif
						            	   		@php $ctr++ @endphp
					            	   		@endforeach
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

@endsection