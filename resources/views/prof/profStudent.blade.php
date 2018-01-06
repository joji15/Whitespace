@extends('layouts.profApp')

@section('title', 'Students')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2 mb-4" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-person text-red" title="Student Profile" aria-hidden="true"></span> Manage Students
    </p>

    <div class="row">
      <div class="col-12">
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="student-class-tab" data-toggle="pill" href="#student-class" role="tab" aria-controls="student-class" aria-selected="true"><span class="oi oi-people" title="Profile Quiz" aria-hidden="true"></span> Manage Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="student-progress-tab" data-toggle="pill" href="#student-progress" role="tab" aria-controls="student-progress" aria-selected="false"><span class="oi oi-graph" title="Profile History" aria-hidden="true"></span> Student Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="student-database-tab" data-toggle="pill" href="#student-database" role="tab" aria-controls="student-database" aria-selected="false"><span class="oi oi-folder" title="Profile Download" aria-hidden="true"></span> Class Database</a>
          </li>
        </ul>
        <hr />
      </div>
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="student-class" role="tabpanel" aria-labelledby="student-class-tab">
            <div class="row">
              <div class="col-12 col-md-8 col-lg-7 mt-2">
                <p class="h4" style="font-family:Segoe UI Light; font-weight:lighter;">
                  <span class="oi oi-plus text-green" title="Create Class" aria-hidden="true"></span> Create Class
                </p>
                <br />
                <form action="{{ route('prof.student.CreateClass.import') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="importxlsx" class="col-sm-3 col-form-label">Import Class List: <b>*</b></label>
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
                <p class="h4" style="font-family:Segoe UI Light; font-weight:lighter;">
                  <p class="card-text"><b>*</b>Importing a class list requires a template, you can download it <a href="files/Template.xlsx"  download="Template.xlsx">here</a>.</p>
                </p>
                @if($show==1)
                <div class="alert bg-green text-white border-dark-grey alert-dismissible fade show toast" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="h2 alert-heading">Success!</p>
                  <p>You have successfully created a class for your students. They can now register.</p>
                </div>
                @else

                @endif
              </div>
              <div class="col-12 col-md-4 col-lg-5 mt-2">
                <p class="h5" style="font-family:Segoe UI Light; font-weight:lighter;">
                  Existing Classes:
                </p>
                <div class="card" style="min-height:40%; height:80%; overflow:auto;">
                  <div class="card-body">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="student-progress" role="tabpanel" aria-labelledby="student-progress-tab">
            Placeholder
          </div>
          <div class="tab-pane fade" id="student-database" role="tabpanel" aria-labelledby="student-database-tab">
            <div class="col-12 col-md-5 col-lg-4">
              <div class="row">
                <label class="h5" style="font-family:Segoe UI; font-weight:lighter;">Databases:</label>
              </div>
              <div class="row">
                <div class="tree">
                  <ul style="padding-left:inherit;">
                    <li class="parent_li">
                      <span class="oi oi-plus expand-btn" title="Database" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;
                      <a href="#"><i class="oi oi-people" title="Database" aria-hidden="true"></i> BSIT-4A 2017-2018</a>
                      <ul>
                        <li class="parent_li" style="display: none;">
                          <span class="oi oi-plus expand-btn" title="Database" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;
                          <a href="#"><i class="oi oi-people" title="table" aria-hidden="true"></i> George, Donald Patrick C.</a>
                          <ul>
                            <li class="parent_li" style="display: none;">
                              <span class="oi oi-plus expand-btn" title="Database" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;
                              <a href="#"><i class="oi oi-hard-drive" title="table" aria-hidden="true"></i> sample_db</a>
                              <ul>
                                <li class="parent_li" style="display: none;">
                                  <span class="oi oi-plus expand-btn" title="Database" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;
                                  <a href="#"><i class="oi oi-hard-drive" title="table" aria-hidden="true"></i> sample_tbl</a>
                                  <ul>
                                    <li style="display: none;">
                                      &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> field_1</a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/js/treeview.js" async></script>

@endsection
