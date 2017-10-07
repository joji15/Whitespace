@extends('layouts.adminapp')

@section('title', 'Students')

@section('content')

<div class="col-sm-8 col-md-10 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h1" style="font-family:Segoe UI Light;">
      Manage Students
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-red">
          <div class="card-body text-white bg-red">
            <h4 class="card-title">Create New Class</h4>
            <p class="card-text">Create a new set of student for the start of a new semester.</p>
          </div>
          <a href=""><div class="card-footer border-red">
            Create Class <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue">
          <div class="card-body text-white bg-blue">
            <h4 class="card-title">Search Student</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <a href=""><div class="card-footer border-blue">
            Search Student <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-green">
          <div class="card-body text-white bg-green">
            <h4 class="card-title">Class Database</h4>
            <p class="card-text">Create Databases for the student to practice or view and edit an existing one.</p>
          </div>
          <a href=""><div class="card-footer border-green">
            View Class Database <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-yellow">
          <div class="card-body text-white bg-yellow">
            <h4 class="card-title">Student’s Progress Monitoring</h4>
            <p class="card-text">See the student's progress in learning SQL through this module</p>
          </div>
          <a href=""><div class="card-footer border-yellow">
            View Progress <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
