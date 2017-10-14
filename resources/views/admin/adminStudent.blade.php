@extends('layouts.adminapp')

@section('title', 'Students')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Manage Students
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-red">
            <h4 class="card-title"><span class="oi oi-plus" title="newClass" aria-hidden="true"></span> Create New Class</h4>
            <p class="card-text">Create a new set of student for the start of a new semester.</p>
          </div>
          <a href="adminCreateClass"><div class="card-footer border-blue-grey">
            Create Class <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-purple">
            <h4 class="card-title"><span class="oi oi-graph" title="progress" aria-hidden="true"></span> Student’s Progress Monitoring</h4>
            <p class="card-text">See the student's progress in learning SQL through this module</p>
          </div>
          <a href="adminViewProgress"><div class="card-footer border-blue-grey">
            View Progress <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-4 mt-4">
        <div class="card border-blue-grey">
          <div class="card-body text-white bg-blue">
            <h4 class="card-title"><span class="oi oi-folder" title="classdb" aria-hidden="true"></span> Class Database</h4>
            <p class="card-text">Create Databases for the student to practice or view and edit an existing one.</p>
          </div>
          <a href="adminViewDB"><div class="card-footer border-blue-grey">
            View Class Database <span class="oi oi-link-intact" title="viewClass" aria-hidden="true"></span>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
