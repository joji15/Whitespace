@extends('layouts.adminapp')

@section('title', 'Home')

@section('content')

<div class="col-sm-8 col-md-10 col-lg-10 justify-content-start content" id="homeContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h1" style="font-family:Segoe UI Light;">
      Welcome, Ms. De Vera
    </p>
    <hr />
    <div class="row">
      <div class="col-12 col-md-12 col-lg-6 mt-4">
        <div class="card border-yellow" style="height: 450px; min-height: 450px;">
          <div class="card-header bg-yellow text-white h5">
            <span class="oi oi-star" title="Rank" aria-hidden="true"></span> Class Standing - Overall
          </div>
          <div class="card-body" style="overflow:auto;">
            <table class="table table-striped table-hover">
              <thead class="thead-inverse text-center">
                <tr>
                  <th>Rank</th>
                  <th>Student Name</th>
                  <th>Course & Section</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>De Vera, Jazelene Mae M.</td>
                  <td>BSIT-4A</td>
                  <td>405</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Cruz, Aimee Lou D.</td>
                  <td>BSIT-4A</td>
                  <td>397</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>George, Donald Patrick C.</td>
                  <td>BSIT-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4A</td>
                  <td>332</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>NAME GOES HERE</td>
                  <td>BSCS-4B</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>NAME GOES HERE</td>
                  <td>BSCS-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIS-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIS-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4B</td>
                  <td>381</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br />
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="card border-green">
          <div class="card-header bg-green text-white h5">
            <span class="oi oi-spreadsheet" title="Database" aria-hidden="true"></span> Scheduled Quizzes
          </div>
          <div class="card-body">
            <h4 class="card-title">Quiz #1 - Basics of SQL</h4>
            <p class="card-text">September 4, 2017 - <b>8:00AM</b></p>
            <a href="#" class="btn bg-green border-green btn-primary">Edit Quiz</a>
            <hr />
            <h4 class="card-title">Quiz #2 - SQL SELECT Statements</h4>
            <p class="card-text">September 11, 2017 - <b>8:00AM</b></p>
            <a href="#" class="btn bg-green border-green btn-primary">Edit Quiz</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 mt-4">
        <div class="card border-blue">
          <div class="card-header bg-blue text-white h5">
            <span class="oi oi-folder" title="Database" aria-hidden="true"></span> Recent Databases
          </div>
          <div class="card-body">
            <h4 class="card-title">BSIT - practicedb</h4>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="#" class="btn btn-primary">View or Edit</a>
          </div>
          <div class="card-body">
            <h4 class="card-title">BSCS - practicedb</h4>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="#" class="btn btn-primary">View or Edit</a>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
</div>

@endsection
