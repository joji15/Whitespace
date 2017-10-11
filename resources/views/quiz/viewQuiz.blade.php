@extends('layouts.adminapp')

@section('title', 'View Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="viewQuizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      View Quizzes...
    </p>
    <hr />
    <div class="row">
      <div class="col-12">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-blue-grey h5">
            <span class="oi oi-spreadsheet" title="Rank" aria-hidden="true"></span> Quiz Details
          </div>
          <div class="card-header text-white bg-dark-grey h6">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Search for Quizzes..." aria-label="Search for..." aria-labelledby="search-input">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="searchInput">Search</button>
              </span>
            </div>
          </div>
          <div class="card-header bg-dark-grey">
            <nav class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <a class="nav-item nav-link active" id="nav-QandA-tab" data-toggle="tab" href="#nav-QandA" role="tab" aria-controls="nav-QandA" aria-expanded="true">Questions and Answers</a>
              <a class="nav-item nav-link" id="nav-results-tab" data-toggle="tab" href="#nav-results" role="tab" aria-controls="nav-results">Results</a>
              <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other">Other info...</a>
            </nav>
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-QandA" role="tabpanel" aria-labelledby="nav-QandA-tab">
                <table class="table table-bordered">
                  <thead class="table-inverse">
                    <tr>
                      <th>#</th>
                      <th>Question</th>
                      <th>Choices</th>
                      <th>Answer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="align-middle" scope="row" rowspan="4">1</th>
                      <td class="align-middle" rowspan="4">What is the meaning of life?</td>
                      <td>A. The Infinite Universe</td>
                      <td class="h4 text-center align-middle" rowspan="4">B.</td>
                    </tr>
                    <tr>
                      <td>B. 42</td>
                    </tr>
                    <tr>
                      <td>C. The Internet</td>
                    </tr>
                    <tr>
                      <td>D. Lovelife</td>
                    </tr>
                    <tr>
                      <th class="align-middle" scope="row" rowspan="4">2</th>
                      <td class="align-middle" rowspan="4">What is the Powerhouse of the Cell?</td>
                      <td>A. Mitochondria</td>
                      <td class="h4 text-center align-middle" rowspan="4">A.</td>
                    </tr>
                    <tr>
                      <td>B. Inner Core</td>
                    </tr>
                    <tr>
                      <td>C. Proteins</td>
                    </tr>
                    <tr>
                      <td>D. Quad Core</td>
                    </tr>
                    <tr>
                      <th class="align-middle" scope="row" rowspan="4">3</th>
                      <td class="align-middle" rowspan="4">What is the most used Programming Language overall?</td>
                      <td>A. Java</td>
                      <td class="h4 text-center align-middle" rowspan="4">C.</td>
                    </tr>
                    <tr>
                      <td>B. SQL</td>
                    </tr>
                    <tr>
                      <td>C. JavaScript</td>
                    </tr>
                    <tr>
                      <td>D. HTML/CSS</td>
                    </tr>
                    <tr>
                      <th class="align-middle" scope="row" rowspan="4">4</th>
                      <td class="align-middle" rowspan="4">What is the name of the latest version on Android?</td>
                      <td>A. Ovaltine</td>
                      <td class="h4 text-center align-middle" rowspan="4">B.</td>
                    </tr>
                    <tr>
                      <td>B. Oreo</td>
                    </tr>
                    <tr>
                      <td>C. Otap</td>
                    </tr>
                    <tr>
                      <td>D. Oatmeal</td>
                    </tr>
                    <tr>
                      <th class="align-middle" scope="row" rowspan="4">5</th>
                      <td class="align-middle" rowspan="4">What is the largest object in the Solar System?</td>
                      <td>A. Earth</td>
                      <td class="h4 text-center align-middle" rowspan="4">C.</td>
                    </tr>
                    <tr>
                      <td>B. Jupiter</td>
                    </tr>
                    <tr>
                      <td>C. The Sun</td>
                    </tr>
                    <tr>
                      <td>D. Uranus</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-results" role="tabpanel" aria-labelledby="nav-results-tab">

              </div>
              <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
