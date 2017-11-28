@extends('layouts.profApp')

@section('title', 'Create Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createQuizContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI; font-weight:lighter;">
      <span class="oi oi-plus text-yellow" title="Create Class" aria-hidden="true"></span> Create Quiz
    </p>
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12 mt-2">
            <form id="questionForm" action="/prof/Quiz/CreateQuiz" method="POST">
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
              <div class="input-group">
                <input class="form-control form-control-lg" type="text" placeholder="Title of the Quiz" name="quiz_title">
              </div>
              <br />
              <div class="input-group">
                <textarea class="form-control form-control-sm" id="Description" rows="3" placeholder="Description of the Quiz" name="quiz_desc"></textarea>
              </div>
              <br />
              <div class="row" id="questionDiv">
                <div class="col-6">
                  <div class="form-group">
                    <label for="question1">Question #1</label>
                    <textarea class="form-control form-control-sm" rows="3" placeholder="Question #1" name="question[]"></textarea>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-check custom-controls-stacked">
                    <label for="question1">Choices</label>
                    <div class="custom-controls-stacked">
                      <label class="custom-control">
                        <input class="form-control form-control-sm" type="text" placeholder="Choice A" name="choice_A[]">
                      </label>
                      <label class="custom-control">
                        <input class="form-control form-control-sm" type="text" placeholder="Choice B" name="choice_B[]">
                      </label>
                      <label class="custom-control">
                        <input class="form-control form-control-sm" type="text" placeholder="Choice C" name="choice_C[]">
                      </label>
                      <label class="custom-control">
                        <input class="form-control form-control-sm" type="text" placeholder="Choice D" name="choice_D[]">
                      </label>
                    </div>
                    <div class="form-check custom-controls-stacked">
                      <label for="correct_answer" style="color:green;">Correct Answer</label>
                      <label class="custom-control">
                        <select class="form-control custom-select form-control-sm" name="correct_ans[]">
                          <option value="A">Choice A</option>
                          <option value="B">Choice B</option>
                          <option value="C">Choice C</option>
                          <option value="D">Choice D</option>
                        </select>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-sm" type="button" id="addBtn"><span class="oi oi-plus" title="add" aria-hidden="true"></span></button>
              <br />
              <br />
              <button type="submit" name="submit" class="btn btn-outline-primary"><span class="oi oi-check"></span>  Create Quiz...</button>
            </form>
            <br />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  var count=2;
  $("#addBtn").click(function(){
    $('#questionDiv').append(
      "<div class='col-6'>"+
      "<div class='form-group'>"+
      "<label for='exampleFormControlTextarea1' class='question_no'>Question #"+count+"</label>"+
      "<textarea class='form-control form-control-sm' rows='3' name='question[]' placeholder='Question #"+(count++)+"'></textarea>"+
      "</div>"+
      "</div>"+
      "<div class='col-5'>"+
      "<div class='form-check custom-controls-stacked'>"+
      "<label for='question1'>Choices</label>"+
      "<div class='custom-controls-stacked'>"+
      "<label class='custom-control'>"+
      "<input class='form-control form-control-sm' type='text' placeholder='Choice A' name='choice_A[]'>"+
      "</label>"+
      "<label class='custom-control'>"+
      "<input class='form-control form-control-sm' type='text' placeholder='Choice B' name='choice_B[]'>"+
      "</label>"+
      "<label class='custom-control'>"+
      "<input class='form-control form-control-sm' type='text' placeholder='Choice C' name='choice_C[]'>"+
      "</label>"+
      "<label class='custom-control'>"+
      "<input class='form-control form-control-sm' type='text' placeholder='Choice D' name='choice_D[]'>"+
      "</label>"+
      "</div>"+
      "<div class='form-check custom-controls-stacked'>"+
      "<label for='correct_answer' style='color:green;'>Correct Answer</label>"+
      "<label class='custom-control'>"+
      "<select class='form-control custom-select form-control-sm' name='correct_ans[]'>"+
      "<option value='A'>Choice A</option>"+
      "<option value='B'>Choice B</option>"+
      "<option value='C'>Choice C</option>"+
      "<option value='D'>Choice D</option>"+
      "</select>"+
      "</div>"+
      "</div>"+
      "</div>");
    });
  })
</script>


@endsection
