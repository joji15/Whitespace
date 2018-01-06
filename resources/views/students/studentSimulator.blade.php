@extends('layouts.studentapp')

@section('title', 'SQL Simulator')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentSimContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-project text-green" title="Simulator" aria-hidden="true"></span> SQL Simulator
    </p>
    <div class="row mt-4 mb-4">
      <div class="col-12 col-md-8 col-lg-9">
        <div class="card border-grey" style="min-height:450px; max-height:700px;">
          <div class="card-body" style="overflow-y: auto;">
            <div class="row" style="height: 350px;">
              <div class="col-12">
                <form action="Simulator" method="POST">
                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
                  <div class="row" style="height: 300px;">
                    <div class="col-12">
                      <div id="editor"></div>
                      <textarea name="editor" style="display: none;" rows="6" ></textarea>
                    </div>
                  </div>
                  <br />
                  <div class="row">
                    <div class="col-12">
                      <div class="mt-1 text-right">
                        <button type="submit" class="btn btn-sm btn-primary" type="button" id="simulate">Run <i class="oi oi-chevron-right"><i class="oi oi-chevron-right"></i></i></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-2">
                <div class="card border-grey d-none" style="min-height:200px; max-height:300px;">
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
                <br />
                <div id="historyaccrdn" data-children=".item">
                  <div class="item">
                    <a data-toggle="collapse" data-parent="#historyaccrdn" href="#historyaccrdn1" aria-expanded="true" aria-controls="historyaccrdn1">
                      <span class="oi oi-clock" title="History" aria-hidden="true"></span> History
                    </a>
                    <div id="historyaccrdn1" class="collapse" role="tabpanel">
                      <br />
                      <table class="table table-sm">
                        <thead class="table-inverse" style="font-size: 12px;">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Query</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Copy</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(!$history_list->isEmpty())
                            <p class="d-none">{{$i = 1}}</p>
                            @foreach($history_list as $hl)
                              <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td><textarea class="textArea" contenteditable="true" readonly style="resize:none; width:100%; border:none;">{{ $hl->query_text }}</textarea></td>
                                <td>{{ $hl->created_at }}</td>
                                <td><button class="copy btn btn-primary btn-sm"><span class="oi oi-clipboard" title="copy" aria-hidden="true"></span> Copy</button></td>
                              </tr>
                            @endforeach
                          @else
                          <tr>
                            <th scope="row" colspan="4">You have no queries in your history.</th>
                          </tr>
                          @endif
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

      <div class="col-12 col-md-4 col-lg-3">
        <div class="card border-blue-grey" style="min-height:450px; max-height:700px;">
          <div class="row">
            <div class="col-12 ml-3 mt-3">
              <label class="h5" style="font-family:Segoe UI; font-weight:lighter;">Databases:</label>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="tree">
                <ul style="padding-left:inherit;">
                  <li class="parent_li">
                    <span class="oi oi-plus" title="Database" aria-hidden="true">
                    </span>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSIT - practicedb</a>
                    <ul>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="parent_li">
                    <span class="oi oi-plus" title="Database" aria-hidden="true">
                    </span>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSCS - practicedb</a>
                    <ul>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="parent_li">
                    <span class="oi oi-plus" title="Database" aria-hidden="true">
                    </span>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="oi oi-hard-drive" title="Database" aria-hidden="true"></i> BSIS - practicedb</a>
                    <ul>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table1</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
                      <li class="parent_li" style="display: none;">
                        <span class="oi oi-plus" title="Database" aria-hidden="true">
                        </span>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="oi oi-grid-three-up" title="table" aria-hidden="true"></i> Table2</a>
                        <ul>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field1</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field2</a>
                          </li>
                          <li style="display: none;">
                            &nbsp;&nbsp;&nbsp;<a href="#"><i class="oi oi-list-rich" title="table" aria-hidden="true"></i> Field3</a>
                          </li>
                        </ul>
                      </li>
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
</div>

<script src="/js/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/ext-language_tools.js"></script>
<script src="/js/clipboard.min.js"></script>
<script>
    // trigger extension
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    var textarea = $('textarea[name="editor"]');
    editor.getSession().on("change", function () {
      textarea.val(editor.getSession().getValue());
    });
    editor.setTheme("ace/theme/crimson_editor");
    editor.getSession().setMode("ace/mode/mysql");
    // enable autocompletion and snippets
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
</script>
<script>
  let allButtons = Array.from(document.querySelectorAll('.copy'));
  allButtons.forEach((item)=>{
    item.addEventListener('click',(ev)=>{
      let textArea = ev.target.closest('tr').querySelector('.textArea');
      textArea.focus();
      let text =  textArea.value; textArea.setSelectionRange(0,text.length);
      document.execCommand('copy');
      $('item').tooltip(options)
    })
  })
  // $(".copybtn").click(function() {
  //   var query = document.querySelector('.querystr');
  //   query.select();
  //   document.execCommand('copy');
  // });
</script>

@endsection
