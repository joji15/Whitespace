@extends('layouts.studentapp')

@section('title', 'SQL Simulator')

<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        height:300px;
    }
</style>

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="quizContent">
  <div class="container-fluid contentMargin">
    <!--<hr />
    <p class="h2" style="font-family:Segoe UI Light;">
      SQL Simulator
    </p>
    <hr />-->
    <div class="row mt-4">
      <div class="col-9">

        <div class="card border-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-blue-grey h5">
            <span class="oi oi-loop-circular" title="Simulator" aria-hidden="true"></span> SQL Simulator
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="row">
              <div class="col-12">
                <textarea id="editor">Select * from</textarea>
                <div class="mt-1 text-right">
                  <button class="btn btn-sm btn-primary" type="button" id="simulate">Run <i class="oi oi-chevron-right"><i class="oi oi-chevron-right"></i></i></button>
                  <button class="btn btn-sm btn-success" type="button" id="simulate">Save <i class="oi oi-chevron-bottom"></i></button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                <div class="card border-grey" style="min-height:200px; max-height:300px;">
                  <div class="card-header text-black h6" >
                    <span style="margin-right:20px;">Query run time: 0.000 sec.</span>
                    <span style="margin-right:20px;">Rows: 4</span>
                    <span>Download: <a href="#">.csv</a> <a href="#">.xlsx</a></span>
                  </div>
                  <div class="card-body" style="overflow-y: auto;">
                    <table class="table table-sm table-bordered table-hover">
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
        </div>

      </div>

      <div class="col-3">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="card-header text-white bg-blue-grey h5">
            <span class="oi oi-folder" title="Database" aria-hidden="true"></span> Database
          </div>
          <div class="card-body" style="overflow-y: auto;">
            <div class="tree">
              <ul>
                <li><span><i class="oi oi-spreadsheet"></i> Table 1</span>
                  <ul>
                    <li>Column 1 <i class="oi oi-key"></i></li>
                    <li>Column 2</li>
                    <li>Column 3</li>
                    <li>Column 4</li>
                    <li>Column 5</li>
                  </ul>
                </li>
                <li><span><i class="oi oi-spreadsheet"></i> Table 2</span>
                  <ul>
                    <li>Column 1 <i class="oi oi-key"></i></li>
                    <li>Column 2</li>
                    <li>Column 3</li>
                    <li>Column 4</li>
                    <li>Column 5</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/js/ace-builds-master/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/ace-builds-master/src-noconflict/ext-language_tools.js"></script>
<script>
    // trigger extension
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/crimson_editor");
    editor.getSession().setMode("ace/mode/mysql");
    // enable autocompletion and snippets
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
</script>
@endsection
