@extends('layouts.profApp')

@section('title', 'Create Class')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="createClassContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-4">
        <div class="card border-red">
          <div class="card-header bg-red text-white h6">
            <span class="oi oi-plus" title="create" aria-hidden="true"></span> Create Class
          </div>
          <div class="card-body">
            <form action="CreateClass" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="importxlsx" class="col-sm-2 col-form-label">Import Class: </label>
                <div class="col-sm-10">
                  <input type="file" name="file" class="form-control-file" id="importxlsx"/>
                </div>
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" value="Import" class="btn btn-primary"/>
                </div>
              </div>
            </form>
            @if($status==1)
              <table class="table table-bordered table-hover">
                <thead class="thead-inverse text-center">
                  <tr>
                    <td>Name</td>
                    <td>Course</td>
                    <td>Section</td>
                    <td>Year</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($student as $s)
                  <tr>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->course }}</td>
                    <td>{{ $s->section }}</td>
                    <td>{{ $s->year }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            @else

            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
