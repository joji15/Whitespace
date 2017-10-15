@extends('layouts.studentapp')

@section('title', 'Quiz Result')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
        Quiz Result
    </p>
    <hr />
    <div class="row">
      <div class="col-lg-12">
        <h4 text-danger><span class="oi oi-check"></span> <strong>Correct Answers:</strong></h4>
        <div class="card border-info mt-4">
          <div class="card-body text-white bg-info">
            <div class="row"><div class="col-sm-12">
                <h4 class="card-title"><span class="oi oi-pencil" title="takeQuiz" aria-hidden="true"></span> SQL Introduction</h4>
                <form class="card-footer">
                    <div>
                          <label class="lead">1. It is a collection of related data.</label>
                    </div>
                    <div class="list-group lead text-black" style="font-family:Segoe UI Light;">
                      <div class="list-group-item list-group-item-success">
                        <label><input type="radio" name="option" checked="checked"> Database</label>
                      </div>
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> Data</label>
                      </div>
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> SQL</label>
                      </div>
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> Base</label>
                      </div>
                    </div>
                </form>
                <form class="card-footer">
                    <div class="mt-2">
                          <label class="lead">2. SQL stands for?</label>
                    </div>
                    <div class="list-group lead text-black" style="font-family:Segoe UI Light;">
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> Standard Query Language</label>
                      </div>
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> Sequence Query Logic</label>
                      </div>
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> SeQueL</label>
                      </div>
                      <div class="list-group-item list-group-item-success">
                        <label><input type="radio" name="option" checked="checked"> Structured Query Language</label>
                      </div>
                    </div>
                    <div class="mt-3 text-right">
                      <a href="studentsTakeQuiz2" type="button" class="btn btn-warning btn-lg">Next <span class="oi oi-share-boxed"></span></a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
