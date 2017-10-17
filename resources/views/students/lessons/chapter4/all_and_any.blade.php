@extends('layouts.studentapp')

@section('title', 'SQL Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      SQL Lessons
    </p>
    <hr />
    <div class="row">
      <div class="col-sm-5">
        <div class="lead text-left">
          <span class="oi oi-book"></span> <code>ALL</code> and <code>ANY</code>
        </div>
          <div>
              <pre class="form-control noresize">
                <div></div>
                <div><i></i></div>
              </pre>
          </div>
      </div>
      <div class="col-sm-7">
        <div class="lead text-left">
          <span class="oi oi-code"></span> Try this!
        </div>
        <div>
          <textarea name="simulator" class="lined"></textarea>
          <div class="mt-1 text-right">
            <button class="btn btn-primary btn-lg" type="button" id="simulate">Run SQL <i class="oi oi-arrow-circle-right"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="card-body" style="overflow-y: auto;">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-query" role="tabpanel" aria-labelledby="nav-query-tab">
          <div class="row">
            <div class="col-12 mt-2">
              <div class="card border-grey" style="min-height:200px; max-height:300px;">
                <div class="card-header text-black h6">
                  Query Result
                  <!--<nav class="nav nav-tabs card-header-tabs" id="subTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-result-tab" data-toggle="tab" href="#nav-result" role="tab" aria-controls="nav-result" aria-expanded="true">Query Result</a>
                  </nav>-->
                </div>
                <div class="card-body" style="overflow-y: auto;">
                  <table class="table table-bordered table-hover">
                    <thead class="table-inverse">
                      <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Data 1,1</th>
                        <th>Data 1,2</th>
                        <th>Data 1,3</th>
                        <th>Data 1,4</th>
                        <th>Data 1,5</th>
                      </tr>
                      <tr>
                        <th>Data 2,1</th>
                        <th>Data 2,2</th>
                        <th>Data 2,3</th>
                        <th>Data 2,4</th>
                        <th>Data 2,5</th>
                      </tr>
                      <tr>
                        <th>Data 3,1</th>
                        <th>Data 3,2</th>
                        <th>Data 3,3</th>
                        <th>Data 3,4</th>
                        <th>Data 3,5</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-generator" role="tabpanel" aria-labelledby="nav-generator-tab">
          <div class="row">
            <div class="col-12 mt-2">
                <div class="card border-grey" style="min-height:200px; max-height:300px;">
                  <div class="card-body" style="overflow-y: auto;">
                    <div class="row">
                      <div class="card border-grey">
                        <div class="card-header text-black h7">
                          Table 1
                        </div>
                        <div class="card-body"style="overflow-y: auto;">
                          <div class="list-group">
                            <a href="#" class="list-group-item">Column 1</a>
                            <a href="#" class="list-group-item">Column 2</a>
                            <a href="#" class="list-group-item">Column 3</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
