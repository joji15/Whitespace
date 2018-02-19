@extends('layouts.profApp')

@section('title', 'Edit Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="editQuizContent">
  <div class="container-fluid contentMargin">
    <br>
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-pencil text-green" title="Simulator" aria-hidden="true"></span> Edit Quiz
    </p>
    <br>
    <div class="row">
      <div class="col-12">
        <form id="questionForm" action="{{ route('prof.quiz.EditQuiz.submit') }}" method="post">
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
          <div class="row justify-content-center mb-5 mt-2" id="question_Div">
            <div class="col-5">
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
          <label for="correct_answer" style="color:black;" class="h4">Add New Question:</label><br />
          <label class="h6">You can add more questions or you can leave it blank.</label>
            <div class="row justify-content-center mt-4" id="questionDiv">
              <form id="questionForm" action="" method="">
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
              

            </div>
          <button class="btn btn-primary btn-sm" type="button" id="addBtn"><span class="oi oi-plus" title="add" aria-hidden="true"></span></button>
          <div class="card-footer mt-2" style="padding:15px; ">
            <button type="submit" name="submit" class="btn btn-outline-primary"><span class="oi oi-check"></span>  Save</button>
            <button type="submit" name="button" class="btn btn-outline-danger"><span class="oi oi-x"></span>  Cancel</button>
          </div>
        </form>
      </div>
    </div>
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
