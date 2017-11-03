@extends('layouts.studentapp')

@section('title', 'Class List')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentClassListContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI">
      Class List
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
              <thead class="table-inverse">
                <tr class="text-center">
                  <td>Class ID</td>
                  <td>Schedule Day</td>
                  <td>Schedule Time</td>
                  <td>Professor</td>
                  <td>Join Class</td>
                </tr>
              </thead>
              <tbody >
                <tr>
                  <td>12345</td>
                  <td>Monday</td>
                  <td>7:00 am - 10:00 am</td>
                  <td>Aimee Lou D. Cruz</td>
                  <td class="text-center"><a href="#"><span class="oi oi-share" title="Join Class" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <td>67890</td>
                  <td>Tuesday</td>
                  <td>7:00 am - 10:00 am</td>
                  <td>Jazelene Mae M. De Vera</td>
                  <td class="text-center"><a href="#"><span class="oi oi-share" title="Join Class" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                  <td>13579</td>
                  <td>Wednesday</td>
                  <td>7:00 am - 10:00 am</td>
                  <td>Donald Patrick C. George</td>
                  <td class="text-center"><a href="#"><span class="oi oi-share" title="Join Class" aria-hidden="true"></span></a></td>
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
