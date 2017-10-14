@extends('layouts.adminapp')

@section('title', 'Create Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createQuizContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Create Quiz...
    </p>
    <hr />
    <div class="row">
      <div class="col-12">
        <div class="card border-red">
          <div class="card-header bg-red text-white h6">
            <span class="oi oi-plus" title="create" aria-hidden="true"></span> Create Quiz
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="input-group">

                  </div>
                </form>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="row" id="questionDiv">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Question #1</label>
                        <textarea class="form-control" id="question1" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </form>
                <button class="btn btn-primary btn-sm" type="button" onclick="addQuestionm()"><span class="oi oi-plus" title="add" aria-hidden="true"></span></button>

                <script>
                function addQuestionm() {
                  document.getElementById("myList").appendChild("questionDiv");
                }
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
