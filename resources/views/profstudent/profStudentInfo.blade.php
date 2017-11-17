@extends('layouts.profApp')

@section('title', 'Student Info')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="progressContent">
  <div class="container-fluid contentMargin">
    <div class="row">
      <div class="col-12 mb-2 mt-4">
        <div class="card border-blue-grey">
          <div class="card-header bg-primary text-white h6">
            <span class="oi oi-graph" title="progress" aria-hidden="true"></span> Name - C/Y/S
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
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

                Detailed Progress here...
                <table class="table table-bordered table-hover" id="progressTbl">
                  <thead class="thead-inverse text-center">
                    <tr>

                    </tr>
                    <th>Chapter</th>
                    <th>Lesson</th>
                    <th>Progress</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Chapter 1</td>
                      <td>Lesson 1</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Lesson 2</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Lesson 3</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="20"
                          aria-valuemin="0" aria-valuemax="100" style="width:20%">
                            20%
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
