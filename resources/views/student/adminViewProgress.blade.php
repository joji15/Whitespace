@extends('layouts.adminapp')

@section('title', 'Student\'s Progress Monitoring Module')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="progressContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mb-2 mt-4">
        <div class="card">
          <div class="card-header h6">
            <span class="oi oi-graph" title="progress" aria-hidden="true"></span> Student's Progress Monitoring Module
          </div>
          <div class="card-body">
            <div class="input-group">
              <input type="search" class="form-control form-control-sm" placeholder="Search..." aria-label="Search for..." aria-labelledby="search-input">
              <span class="input-group-btn">
                <button class="btn btn-sm btn-primary" type="button" id="searchStudInput">Search</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
