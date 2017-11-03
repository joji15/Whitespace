@extends('layouts.profApp')

@section('title', 'Home')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="homeContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-yellow text-white h6">
            <span class="oi oi-star" title="Rank" aria-hidden="true"></span> Class Standing - Overall
          </div>
          <div class="card-header bg-dark-grey">
            <nav class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <a class="nav-item nav-link active" id="nav-BSIT3A-tab" data-toggle="tab" href="#nav-BSIT3A" role="tab" aria-controls="nav-BSIT3A" aria-expanded="true"><span class="oi oi-people" title="BSIT3A" aria-hidden="true"></span> BSIT-3A</a>
              <a class="nav-item nav-link" id="nav-BSIT3B-tab" data-toggle="tab" href="#nav-BSIT3B" role="tab" aria-controls="nav-BSIT3B"><span class="oi oi-people" title="BSIT3B" aria-hidden="true"></span> BSIT-3B</a>
              <a class="nav-item nav-link" id="nav-BSCS3A-tab" data-toggle="tab" href="#nav-BSCS3A" role="tab" aria-controls="nav-BSCS3A"><span class="oi oi-people" title="BSCS3A" aria-hidden="true"></span> BSCS-3A</a>
              <a class="nav-item nav-link" id="nav-BSCS3B-tab" data-toggle="tab" href="#nav-BSCS3B" role="tab" aria-controls="nav-BSCS3B"><span class="oi oi-people" title="BSCS3B" aria-hidden="true"></span> BSCS-3B</a>
              <a class="nav-item nav-link" id="nav-BSIS3A-tab" data-toggle="tab" href="#nav-BSIS3A" role="tab" aria-controls="nav-BSIS3A"><span class="oi oi-people" title="BSIS3A" aria-hidden="true"></span> BSIS-3A</a>
              <a class="nav-item nav-link" id="nav-BSIS3B-tab" data-toggle="tab" href="#nav-BSIS3B" role="tab" aria-controls="nav-BSIS3B"><span class="oi oi-people" title="BSIS3B" aria-hidden="true"></span> BSIS-3B</a>
            </nav>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-BSIT3A" role="tabpanel" aria-labelledby="nav-BSIT3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-BSIT3B" role="tabpanel" aria-labelledby="nav-BSIT3B-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-BSCS3A" role="tabpanel" aria-labelledby="nav-BSCS3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-BSCS3B" role="tabpanel" aria-labelledby="nav-BSCS3B-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-BSIS3A" role="tabpanel" aria-labelledby="nav-BSIS3A-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-BSIS3B" role="tabpanel" aria-labelledby="nav-BSIS3B-tab">
                <table class="table table-striped table-hover table-sm">
                  <thead class="thead-inverse text-center">
                    <tr>
                      <th>Rank</th>
                      <th>Student Name</th>
                      <th>Course & Section</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(255, 255, 130);">
                      <th scope="row">1</th>
                      <td>De Vera, Jazelene Mae M.</td>
                      <td>BSIT-4A</td>
                      <td>405</td>
                    </tr>
                    <tr style="background-color: rgb(222, 222, 222);">
                      <th scope="row">2</th>
                      <td>Cruz, Aimee Lou D.</td>
                      <td>BSIT-4A</td>
                      <td>397</td>
                    </tr>
                    <tr style="background-color: rgb(255, 190, 121);">
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
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-green text-white h6">
            <span class="oi oi-spreadsheet" title="Quizzes" aria-hidden="true"></span> Scheduled Quizzes
          </div>
          <div class="card-body">
            <h5 class="card-title">Quiz #1 - Basics of SQL</h5>
            <p class="card-text">September 4, 2017 - <b>8:00AM</b></p>
            <a href="profEditQuiz" class="btn bg-green border-green btn-primary">Edit Quiz</a>
            <hr />
            <h5 class="card-title">Quiz #2 - SQL SELECT Statements</h5>
            <p class="card-text">September 11, 2017 - <b>8:00AM</b></p>
            <a href="profEditQuiz" class="btn bg-green border-green btn-primary">Edit Quiz</a>
            <hr />
            <h5 class="card-title">Quiz #3 - SQL FROM Statements</h5>
            <p class="card-text">September 18, 2017 - <b>8:00AM</b></p>
            <a href="profEditQuiz" class="btn bg-green border-green btn-primary">Edit Quiz</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-blue text-white h6">
            <span class="oi oi-folder" title="Database" aria-hidden="true"></span> Recent Databases
          </div>
          <div class="card-body">
            <h5 class="card-title">BSIT - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
            <hr />
            <h5 class="card-title">BSCS - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
            <hr />
            <h5 class="card-title">BSIS - practicedb</h5>
            <p class="card-text"><b>Date Created:</b> September 11, 2017</p>
            <a href="profViewDB" class="btn btn-primary">View or Edit</a>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
</div>

@endsection
