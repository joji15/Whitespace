@extends('layouts.profApp')

@section('title', 'Edit Quizzes')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="editQuizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Edit Quiz Content...
    </p>
    <hr />
    <div class="row">
      <div class="col-12 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-orange text-white h6">
            <span class="oi oi-pencil" title="edit" aria-hidden="true"></span> Edit Quiz
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <form>
                  <div class="input-group">
                    <input class="form-control form-control-md" type="text" placeholder="Quiz Name">
                  </div>
                  <br />
                  <div class="input-group">
                    <textarea class="form-control form-control-md custom-control" id="question1" rows="1" placeholder="Quiz Description"></textarea>
                  </div>
                </form>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-12">
                <form id="questionForm">
                  <div class="row" id="questionDiv">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="question1">Question #1</label>
                        <textarea class="form-control form-control-sm" id="question1" rows="2"></textarea>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-check custom-controls-stacked">
                        <label for="question1">Choices</label>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-radio">
                            <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 1">
                          </label>
                          <label class="custom-control custom-radio">
                            <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 2">
                          </label>
                          <label class="custom-control custom-radio">
                            <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 3">
                          </label>
                          <label class="custom-control custom-radio">
                            <input id="radioStacked4" name="radio-stacked" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <input class="form-control form-control-sm" type="text" placeholder="Choice 4">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <center>
                  <button class="btn btn-primary btn-lg" type="button" id="Save"><span title="save" aria-hidden="true">Save</span></button>
                  <button class="btn btn-danger btn-lg" type="button" id="Cancel"><span title="cancel" aria-hidden="true">Cancel</span></button>
                </center>

              </div>
            </div>
          </div>
    </div>
  </div>
</div>

@endsection
