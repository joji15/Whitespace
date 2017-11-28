@extends('layouts.profApp')

@section('title', 'Create Class')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createClassContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-plus text-red" title="Create Class" aria-hidden="true"></span> Create Class
    </p>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-4">
        <form action="CreateClass" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="{{ csrf_token() }}" name="_token" />
          <div class="form-group row">
            <label for="year" class="col-sm-3 col-form-label">School Year: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="year" aria-label="year" aria-describedby="year" name="year" placeholder="Example: 201*-201*" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="course" class="col-sm-3 col-form-label">Course: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="course" aria-label="course" aria-describedby="course" name="course" placeholder="Example: BS**" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="section" class="col-sm-3 col-form-label">Section: </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="section" aria-label="section" aria-describedby="section" name="section" placeholder="Example: 3*" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="importxlsx" class="col-sm-3 col-form-label">Import Class List: </label>
            <div class="col-sm-9">
              <input type="file" name="file" class="form-control-file" id="importxlsx"/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary"><span class="oi oi-plus" title="CreateClass" aria-hidden="true"></span> Create</button>
            </div>
          </div>
        </form>

        <div class="alert bg-green text-white border-dark-grey alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="h2 alert-heading">Success!</p>
          <p>You have successfully created a class for your students. They can now register.</p>
        </div>

        @if($show==1)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Success!</h4>
          <p>You have successfully created a class for your students. They can now register.</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @else

        @endif
      </div>
    </div>
  </div>
</div>

@endsection
