@extends('layouts.studentapp')

@section('title', 'SQL Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studlessonContent">
  <div class="container-fluid contentMargin">
  	<div class="row">
  		<div class="col-10">
		    <br />
		    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
		      <span class="oi oi-book text-blue" title="Simulator" aria-hidden="true"></span> Chapter 1: <em>An SQL Introduction</em>
		    </p>
  		</div>
  		<div class="col-2">		
  			<br>
		   	<a class="btn btn-sm bg-blue btn-primary" href="{{route('student.SQLLesson')}}"><span class="oi oi-arrow-circle-left text-white" title="SQL Lessons" aria-hidden="true"></span> Go Back to Lessons</a>
  		</div>
  	</div>

  </div>
</div>

@endsection
