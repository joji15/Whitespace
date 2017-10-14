@extends('layouts.studentapp')

@section('title', 'Class List')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      SQL Lessons
    </p>
    <hr />
    <div class="row">
      <div class="col-12 mt-4">
        <div class="card border-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-red h5">
            <span class="oi oi-spreadsheet" title="classes" aria-hidden="true"></span> List of Classes
          </div>
          <div class="card-header bg-red h6">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Search for Class..." aria-label="Search for..." aria-labelledby="search-input">
              <span class="input-group-btn">
                <button class="btn btn-primary " type="button" id="searchInput"> Search</button>
              </span>
            </div>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <table class="table table-bordered">
              <thead class="table-inverse ">
                <tr>
                  <th>Class ID</th>
                  <th>Schedule Day</th>
                  <th>Schedule Time</th>
                  <th>Professor</th>
                  <th>Join Class</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>12345</th>
                  <th>Monday</th>
                  <th>7:00 am - 10:00 am</th>
                  <th>Aimee Lou D. Cruz</th>
                  <th><button class="btn btn-primary" type="button" name="join">Join</button></th>
                </tr>
                <tr>
                  <th>67890</th>
                  <th>Tuesday</th>
                  <th>7:00 am - 10:00 am</th>
                  <th>Jazelene Mae M. De Vera</th>
                  <th><button class="btn btn-primary" type="button" name="join">Join</button></th>
                </tr>
                <tr>
                  <th>13579</th>
                  <th>Wednesday</th>
                  <th>7:00 am - 10:00 am</th>
                  <th>Donald Patrick C. George</th>
                  <th><button class="btn btn-primary" type="button" name="join">Join</button></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
