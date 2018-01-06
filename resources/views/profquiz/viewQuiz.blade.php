@extends('layouts.profApp')

@section('title', 'View Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="viewQuizContent">
  <div class="container-fluid contentMargin">
    <br />
    <div class="row">
      <div class="col-12">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-green h6">
            <span class="oi oi-spreadsheet" title="Rank" aria-hidden="true"></span> Quiz Details
          </div>
          <div class="card-header bg-dark-grey">
            <nav class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <a class="nav-item nav-link active" id="nav-QandA-tab" data-toggle="tab" href="#nav-QandA" role="tab" aria-controls="nav-QandA" aria-expanded="true"><span class="oi oi-question-mark" title="qanda" aria-hidden="true"></span> Questions and Answers</a>
              <a class="nav-item nav-link" id="nav-results-tab" data-toggle="tab" href="#nav-results" role="tab" aria-controls="nav-results"><span class="oi oi-check" title="results" aria-hidden="true"></span> Results</a>
              <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other"><span class="oi oi-bar-chart" title="others" aria-hidden="true"></span> Other info...</a>
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
                      <th class="text-center align-middle" scope="row" rowspan="4">1</th>
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
                      <th class="text-center align-middle" scope="row" rowspan="4">2</th>
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
                      <th class="text-center align-middle" scope="row" rowspan="4">3</th>
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
                      <th class="text-center align-middle" scope="row" rowspan="4">4</th>
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
                      <th class="text-center align-middle" scope="row" rowspan="4">5</th>
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
                <select class="form-control custom-select" id="section" name="section">
                  <option value="1">BSIT: 2017-2018</option>
                  <option value="2">BSIS: 2017-2018</option>
                  <option value="3">BSCS: 2017-2018</option>
                </select>
                <table class="table table-striped table-hover mt-2">
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
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                <canvas id="myChart" width="600" height="350"></canvas>
                <script>
                var ctx = document.getElementById("myChart");
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ["Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10"],
                    datasets: [{
                      label: '# of Correct Answers for each question',
                      data: [3, 13, 9, 5, 10, 8, 11, 6, 5, 4],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                      ],
                      borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    // responsive:false,
                    scales: {
                      yAxes: [{
                        ticks: {
                          beginAtZero:true
                        }
                      }]
                    }
                  }
                });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
  </div>
</div>

@endsection
