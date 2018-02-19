@extends('layouts.studentapp')

@section('title', 'SQL Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studlessonContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-document text-blue" title="Simulator" aria-hidden="true"></span> Database Concepts
    </p>
    <video width="100%" autoplay="true" controls="true">
    	<source src="{{ asset('vid/Database Concepts.mp4') }}" type="video/mp4">
    </video>
</div>
@endsection
