@extends('layouts.studentapp')

@section('title', 'Take Quiz')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      Take Quiz
    </p>
    <hr />

    <div class="row">
      <div class="col-lg-12">
        <div class="card border-info">
          <div class="card-body text-white bg-info">
            <div class="row">
              <div class="col-sm-12">
                <h4 class="card-title"><span class="oi oi-pencil" title="takeQuiz" aria-hidden="true"></span> SQL Introduction</h4>
                <form class="card-footer">
                    <div>
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
                      <div class="list-group-item">
                        <label><input type="radio" name="option"> Structured Query Language</label>
                      </div>
                    </div>
                    <div class="mt-3 text-right">
                      <a href="studentsResultQuiz" type="button" class="btn btn-warning btn-lg">Next <span class="oi oi-share-boxed"></span></a>
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
