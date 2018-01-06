@extends('layouts.profApp')

@section('title', 'Edit Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="editQuizContent">
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
                <form id="questionForm" action="/adminViewQuiz" method="post">
                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
                  <textarea name="quizID" class="d-none">{{$quizID}}</textarea>
                  @foreach($question_info as $question_info)
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="text" placeholder="Title of the Quiz" name="quiz_title" value="{{$question_info->quiz_title}}">
                  </div>
                  <br />
                  <div class="input-group">
                    <textarea class="form-control form-control-sm" id="question1" rows="2" placeholder="Description of the Quiz" name="quiz_desc">{{$question_info->quiz_desc}}</textarea>
                  </div>
                  @endforeach
                  <br />
                  <div class="d-none">{{ $i = 1 }}</div>
                  @foreach($question as $question)
                  <input type="hidden" name="question_id[]" value="{{$question->question_id}}">
                  <div class="row" id="question_Div">
                    <div class="col-6">
                      <div class="form-group" >
                        <label for="question1">Question #{{$i}}</label>
                        <textarea class="form-control form-control-sm" id="question1" rows="6" placeholder="Question #{{ $i++ }}" name="update_question[]">{{$question->question}}</textarea>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-check custom-controls-stacked">
                        <label for="question1">Choices</label>
                        <div class="custom-controls-stacked">
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice A" name="update_choice_A[]" value="{{$question->choice_A}}">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice B" name="update_choice_B[]" value="{{$question->choice_B}}">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice C" name="update_choice_C[]" value="{{$question->choice_C}}">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice D" name="update_choice_D[]" value="{{$question->choice_D}}">
                          </label>
                        </div>
                        <div class="form-check custom-controls-stacked">
                          <label for="correct_answer" style="color:green;">Correct Answer</label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" placeholder="Correct Answer" name="view_correct_ans" value="{{$question->correct_ans}}" id="change" readonly>
                          </label>
                          <label for="correct_answer" style="color:green;">New Correct Answer</label>
                          <label class="custom-control">
                            <select class="form-control custom-select" id="choices" name="update_correct_ans[]">
                              @if ($question->correct_ans === 'choice_A')
                                <option value="choice_A" selected>Choice A</option>
                                <option value="choice_B">Choice B</option>
                                <option value="choice_C">Choice C</option>
                                <option value="choice_D">Choice D</option>
                              @elseif ($question->correct_ans === 'choice_B')
                                <option value="choice_A">Choice A</option>
                                <option value="choice_B" selected>Choice B</option>
                                <option value="choice_C">Choice C</option>
                                <option value="choice_D">Choice D</option>
                              @elseif ($question->correct_ans === 'choice_C')
                                <option value="choice_A">Choice A</option>
                                <option value="choice_B">Choice B</option>
                                <option value="choice_C" selected>Choice C</option>
                                <option value="choice_D">Choice D</option>
                              @elseif ($question->correct_ans ==='choice_D')
                                <option value="choice_A">Choice A</option>
                                <option value="choice_B">Choice B</option>
                                <option value="choice_C">Choice C</option>
                                <option value="choice_D" selected>Choice D</option>
                              @endif
                            </select>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <label for="correct_answer" style="color:black;" class="h2">Add New Question:</label><br />
                  <label class="h5">You can add more questions or you can leave it blank.</label>
                    <div class="row mt-4" id="questionDiv">
                      <form id="questionForm" action="" method="">
                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="question1">Question #{{"$i"}}</label>
                          <textarea class="form-control form-control-sm" id="question1" rows="6" placeholder="Question #{{$i++}}" name="add_question[]"></textarea>
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="form-check custom-controls-stacked">
                          <label for="question1">Choices</label>
                          <div class="custom-controls-stacked">
                            <label class="custom-control">
                              <input class="form-control form-control-sm" type="text" placeholder="Choice A" name="add_choice_A[]">
                            </label>
                            <label class="custom-control">
                              <input class="form-control form-control-sm" type="text" placeholder="Choice B" name="add_choice_B[]">
                            </label>
                            <label class="custom-control">
                              <input class="form-control form-control-sm" type="text" placeholder="Choice C" name="add_choice_C[]">
                            </label>
                            <label class="custom-control">
                              <input class="form-control form-control-sm" type="text" placeholder="Choice D" name="add_choice_D[]">
                            </label>
                          </div>
                          <div class="form-check custom-controls-stacked">
                            <label for="correct_answer" style="color:red;">Correct Answer</label>
                            <label class="custom-control">
                              <select class="form-control custom-select" id="" name="add_correct_ans[]">
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
                  <button class="btn btn-primary btn-sm" type="button" id="addBtn"><span class="oi oi-plus" title="add" aria-hidden="true"></span></button>
                  <div class="card-footer mt-2" style="padding:15px; ">
                    <button type="submit" name="submit" class="btn btn-outline-primary"><span class="oi oi-check"></span>  Save</button>
                    <button type="submit" name="button" class="btn btn-outline-danger"><span class="oi oi-x"></span>  Cancel</button>
                  </div>
                </form>
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
<script>
$(document).ready(function(){

$("#addBtn").click(function(){
  $('#questionDiv').append(
      "<div class='col-6'>"+
        "<div class='form-group'>"+
          "<label for='exampleFormControlTextarea1' class='question_no'>Question #"+{{$i}}+"</label>"+
          "<textarea class='form-control' id='question1' rows='6' name='add_question[]' placeholder='Question #"+{{$i++}}+"'></textarea>"+
        "</div>"+
      "</div>"+
      "<div class='col-5'>"+
        "<div class='form-check custom-controls-stacked'>"+
          "<label for='question1'>Choices</label>"+
            "<div class='custom-controls-stacked'>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice A' name='add_choice_A[]'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice B' name='add_choice_B[]'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice C' name='add_choice_C[]'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice D' name='add_choice_D[]'>"+
              "</label>"+
            "</div>"+
            "<div class='form-check custom-controls-stacked'>"+
              "<label for='correct_answer' style='color:red;'>Correct Answer</label>"+
                "<label class='custom-control'>"+
                "<select class='form-control custom-select' id='' name='add_correct_ans[]'>"+
                  "<option value='choice_A'>Choice A</option>"+
                  "<option value='choice_B'>Choice B</option>"+
                  "<option value='choice_C'>Choice C</option>"+
                  "<option value='choice_D'>Choice D</option>"+
                "</select>"+
            "</div>"+
          "</div>"+
        "</div>");
});

})
</script>
<!-- <script>
  function choicesFunction() {
  var x = document.getElementById("choices").value;
  document.getElementById("change").value = x;
  }
</script> -->

@endsection
