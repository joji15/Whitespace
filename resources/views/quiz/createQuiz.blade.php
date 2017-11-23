@extends('layouts.adminapp')

@section('title', 'Create Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createQuizContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mt-4 mb-2">
        <div class="card border-blue-grey">
          <div class="card-header bg-yellow text-white h6">
            <span class="oi oi-plus" title="create" aria-hidden="true"></span> Create Quiz
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <form>
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="text" placeholder="Title of the Quiz">
                  </div>
                  <br />
                  <div class="input-group">
                    <textarea class="form-control form-control-sm" id="question1" rows="2" placeholder="Description of the Quiz"></textarea>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                <form id="questionForm">
                  <div class="row" id="questionDiv">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="question1">Question #1</label>
                        <textarea class="form-control form-control-sm" id="question1" rows="6"></textarea>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-check custom-controls-stacked">
                        <label for="question1">Choices</label>
                        <div class="custom-controls-stacked">
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 1">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 2">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 3">
                          </label>
                          <label class="custom-control">
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 4">
                          </label>
                        </div>
                        <div class="form-check custom-controls-stacked">
                          <label for="correct_answer" style="color:red;">Correct Answer</label>
                          <label class="custom-control">
                            <select class="form-control custom-select" id="" name="">
                              <option value="1">Choice A</option>
                              <option value="2">Choice B</option>
                              <option value="3">Choice C</option>
                              <option value="3">Choice D</option>
                            </select>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <button class="btn btn-primary btn-sm" type="button" id="addBtn"><span class="oi oi-plus" title="add" aria-hidden="true"></span></button>

              </div>
            </div>
          </div>
          <div class="card-footer mt-2" style="padding:15px; ">
            <button type="submit" name="button" class="btn btn-outline-primary"><span class="oi oi-check"></span>  Save</button>
            <button type="submit" name="button" class="btn btn-outline-danger"><span class="oi oi-x"></span>  Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$("#addBtn").click(function(){
  $('#questionForm').append(
    "<div class='row' id='questionDiv'>"+
      "<div class='col-6'>"+
        "<div class='form-group'>"+
          "<label for='exampleFormControlTextarea1' class='question_no'>Question #"+"</label>"+
          "<textarea class='form-control' id='question1' rows='6'></textarea>"+
        "</div>"+
      "</div>"+
      "<div class='col-5'>"+
        "<div class='form-check custom-controls-stacked'>"+
          "<label for='question1'>Choices</label>"+
            "<div class='custom-controls-stacked'>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice 1'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice 2'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice 3'>"+
              "</label>"+
              "<label class='custom-control'>"+
                "<input class='form-control form-control-sm' type='text' placeholder='Choice 4'>"+
              "</label>"+
            "</div>"+
            "<div class='form-check custom-controls-stacked'>"+
              "<label for='correct_answer' style='color:red;'>Correct Answer</label>"+
                "<label class='custom-control'>"+
                "<select class='form-control custom-select' id='' name=''>"+
                  "<option value='1'>Choice A</option>"+
                  "<option value='2'>Choice B</option>"+
                  "<option value='3'>Choice C</option>"+
                  "<option value='3'>Choice D</option>"+
                "</select>"+
            "</div>"+
          "</div>"+
        "</div>"+
    "</div>");
});

</script>
@endsection
