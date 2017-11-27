@extends('layouts.adminapp')

@section('title', 'View Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="viewQuizContent">
  <div class="container-fluid contentMargin">
    <br />
    <div class="row">
      <div class="col-12">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-green h6">
            <span class="oi oi-clipboard" title="QandA" aria-hidden="true"></span> Quiz #1
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
                <div class="row">
                  <div class="col-8">
                    <form>

                      <div class="input-group">
                        <input class="form-control form-control-lg" type="text" placeholder="Title of the Quiz" value="">
                      </div>
                      <br />
                      <div class="input-group">
                        <textarea class="form-control form-control-sm" id="question1" rows="2" placeholder="Description of the Quiz"></textarea>
                      </div>

                    </form>
                  </div>
                </div>

                <br />
                @foreach($questions as $q)
                <div class="row">
                  <div class="col-12">
                    <form id="questionForm">
                      <div class="row" id="questionDiv">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="question1">Question #</label>
                            <textarea class="form-control form-control-sm" id="question1" rows="6">{{$q->question}}</textarea>
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-check custom-controls-stacked">
                            <label for="question1">Choices</label>
                            <div class="custom-controls-stacked">
                              <label class="custom-control custom-radio">
                                <input class="form-control form-control-sm" type="text" placeholder="Choice 1" value="{{$q->choice_A}}">
                              </label>
                              <label class="custom-control custom-radio">
                                <input class="form-control form-control-sm" type="text" placeholder="Choice 2" value="{{$q->choice_B}}">
                              </label>
                              <label class="custom-control custom-radio">
                                <input class="form-control form-control-sm" type="text" placeholder="Choice 3" value="{{$q->choice_C}}">
                              </label>
                              <label class="custom-control custom-radio">
                                <input class="form-control form-control-sm" type="text" placeholder="Choice 4" value="{{$q->choice_D}}">
                              </label>
                            </div>
                            <div class="form-check custom-controls-stacked">
                              <label for="correct_answer" style="color:red;">Correct Answer</label>
                              <label class="custom-control">
                                <select class="form-control custom-select" id="" name="{{$q->correct_ans}}questions[] multiple">
                                  <option value="choice_A">Choice A</option>
                                  <option value="choice_B">Choice B</option>
                                  <option value="choice_C">Choice C</option>
                                  <option value="choice_D">Choice D</option>
                                </select>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                @endforeach

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
