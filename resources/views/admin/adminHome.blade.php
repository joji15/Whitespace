@extends('layouts.adminapp')

@section('content')

<div class="col-sm-8 col-md-10 col-lg-10 content" id="homeContent">
  <div class="container">
    <hr />
    <p class="h1" style="font-family:Segoe UI Light;">
      Welcome, Ms. De Vera
    </p>
    <hr />
    <div class="row">
      <div class="col-sm col-md-8 col-lg-8">
        <div class="card bg-Light" style="height:450px;">
          <div class="card-header text-white bg-dark align-middle">
            <ul class="nav card-header-tabs" style="float:left;">
              <li class="nav-item">
                <p class="h5"><span class="oi oi-star" title="Rank" aria-hidden="true"></span> Class Standing - Overall</p>
              </li>
            </ul>
            <ul class="nav nav-tabs card-header-tabs justify-content-end">
              <li class="nav-item">
                <a class="nav-link active" href="#">BSIT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BSIS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BSCS</a>
              </li>
            </ul>
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
                  <td>BSIT-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4A</td>
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
                  <td>BSIT-4A</td>
                  <td>381</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>NAME GOES HERE</td>
                  <td>BSIT-4A</td>
                  <td>381</td>
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
