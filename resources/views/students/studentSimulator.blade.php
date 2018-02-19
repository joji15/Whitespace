@extends('layouts.studentapp')

@section('title', 'SQL Simulator')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentSimContent">
  <div class="container-fluid contentMargin">
    <br>
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-hard-drive text-green" title="Simulator" aria-hidden="true"></span> SQL Query Simulator
    </p>
    <br>
    <div class="row">
      <div class="col-3">
        <p class="h5" style="font-weight: lighter;"><span class="oi oi-document" title="Simulator" aria-hidden="true"></span> Exercises:</p>
        <div id="lessonAccord" role="tablist">
          <div class="card border-blue-grey no-shadow">
            <div class="card-header pt-2 pb-2 pl-3 bg-whitesmoke" role="tab" id="Exercise1">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#exercise1col" role="button" aria-expanded="true" aria-controls="exercise1col" style="font-size: 14px">
                  SQL &amp; Things
                </a>
              </h5>
            </div>

            <div id="exercise1col" class="collapse" role="tabpanel" aria-labelledby="Exercise1" data-parent="#lessonAccord">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <div class="card border-blue-grey no-shadow">
            <div class="card-header pt-2 pb-2 pl-3 bg-whitesmoke" role="tab" id="Exercise2">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#exercise2col" role="button" aria-expanded="false" aria-controls="exercise2col" style="font-size: 14px">
                  Exercise #2
                </a>
              </h5>
            </div>
            <div id="exercise2col" class="collapse" role="tabpanel" aria-labelledby="Exercise2" data-parent="#lessonAccord">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <div class="card border-blue-grey no-shadow">
            <div class="card-header pt-2 pb-2 pl-3 bg-whitesmoke" role="tab" id="Exercise3">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" href="#exercise3col" role="button" aria-expanded="false" aria-controls="exercise3col" style="font-size: 14px">
                  Exercise #3
                </a>
              </h5>
            </div>
            <div id="exercise3col" class="collapse" role="tabpanel" aria-labelledby="Exercise3" data-parent="#lessonAccord">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9">
        <p class="h5" style="font-weight: lighter;"><span class="oi oi-code" title="Simulator" aria-hidden="true"></span> Simulator:</p>
        <div class="row">
          <div class="col-4 mb-2" style="max-height: 210px; min-height: 100px;">
            <div class="card no-shadow">
              <div class="card-header p-2">
                <div class="row">
                  <div class="col-7" style="font-size: 15px;">
                    &nbsp;&nbsp;<span class="oi oi-hard-drive" title="Databases" aria-hidden="true"></span> Premiere DB
                  </div>
                  <div class="col-5">
                    <button title="Restore the database back to its original content" class="btn btn-danger btn-sm pt-0 pb-0" id="restoreDBBtn" type="button" onclick="wsschoolsWebSQL1.wsClearDatabase()" style="display:none;">Restore</button>
                  </div>
                </div>
              </div>
              <div class="card-body" style="max-height: 175px; min-height: 100px; overflow-y: scroll;">
                <div id="dbInfo">
                  <div id="descriptionDIV" style="font-size:90%;background-color:#ffffff;color:#000000;opacity:1;display:none;z-index:1;">
                    <div id="CloseDescription" title="Close description'" style="width:20px;font-size:14px;background:black;color:#ffffff;top:3px;right:0px;position:absolute;border-radius:30px;cursor:pointer;" onclick="hideDescription()">X</div>     
                    <h3 style="color:#8AC007;font-weight:bold;">The Try-SQL Editor<br>at wsschools.com</h3>
                    <div id="nostatementsupport" style="display:none;">
                      <p>This SQL-Statement is not supported in the WebSQL Database.</p>
                      <p>The example still works, because it uses a modified version of SQL.</p>
                    </div>
                    <div id="nobrowsersupport" style="display:none;">
                      <p>Your browser does not support WebSQL.</p>
                      <p>Your are now using a light-version of the Try-SQL Editor, with a read-only Database.</p>
                      <p>If you switch to a browser with WebSQL support, you can try any SQL statement, and play with the Database as much as you like. The Database can also be restored at any time.</p>
                    </div>
                    <div id="yesbrowsersupport">
                      <p>Our Try-SQL Editor uses WebSQL to demonstrate SQL.</p>     
                      <p>A Database-object is created in your browser, for testing purposes.</p>
                      <p>You can try any SQL statement, and play with the Database as much as you like. The Database can be restored at any time, simply by clicking the "Restore Database" button.</p>
                    </div>
                    <div id="websqlexplain">
                      <h3 style="color:#8AC007;">wsC WebSQL</h3>
                      <p>WebSQL stores a Database locally, on the user's computer. Each user gets their own Database object.</p>
                      <!--<p>WebSQL was intended to be the standard Database Object in HTML5, however, wsC has announced that WebSQL will not be maintained any further.<p>-->
                        <h3 style="color:#8AC007;">WebSQL Browser Support</h3>
                        <div>
                          <div class="chromesupport"> </div>
                          <div class="iesupport"> </div>
                          <div class="safarisupport"> </div>
                          <div class="firefoxsupport"> </div>
                          <div class="operasupport"> </div>
                          <div style="clear:both;"></div>
                        </div>
                        <p>WebSQL is supported in Chrome, Safari, and Opera.</p>
                        <div id="yesbrowsersupport2">     
                          <p>If you use another browser you will still be able to use our Try SQL Editor, but a different version, using a server-based ASP application, with a read-only Access Database, where users are not allowed to make any changes to the data.</p>     
                        </div>
                      </div>
                    </div>
                    <div>
                      <div id="yourDB"></div>
                      <div id="yourRC"></div>
                      <div id="yourIX"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-8 mb-2">
              <div id="contentSQL">
                <form method="post" target="view" id="tryitform" name="tryitform" onsubmit="validateForm();">
                  <div style="clear:both;"></div>
                  <textarea class="form-control" style="font-size: 13px" id="textareaCodeSQL" name="textareaCodeSQL" wrap="logical" rows="12">SELECT * FROM Customer;</textarea>
                  <input type="hidden" name="code" id="code" />
                  <input type="hidden" id="bt" name="bt" />
                </form>
                <div class="row text-right">
                  <div class="col">
                    <input class="btn btn-primary btn-sm mt-2" type="button" value="Run Query »" onclick="wsschoolsSQLSubmit()">  
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 mb-2">
              <div id="resultSQL">
                <iframe id="iframeResultSQL" frameborder="0" name="view"></iframe>
                <p class="h6" style="font-weight: lighter;">Results:</p>
                <div id="divResultSQL" style="font-size: 13px; min-height: 100px; max-height: 350px;" class="form-control">
                  <div>Create SQL Statement to be executed</div>
                </div>
              </div>
            </div>

            <div class="col-12 mb-2">  
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
          <input type="hidden" id="sSupport" value="" />
        </div>
      </div>
    </div>
  </div>

  <style>

  #iframeResultSQL{
   display:none;
   background-color: #ffffff;
   margin-left:10px;
   height:95%;
   min-height:400px;
   top:25px;
   width:97%;
   border:1px solid #d3d3d3;
 }

 #divResultSQL{
   background-color: #ffffff;
   overflow:auto;
 }

 #textareaCodeSQL{
   resize: none;
 }

 #footerSQL{
  color:#617f10;
  font-family:verdana;
}

#dbInfo
{
 background-color:#ffffff;
 color:#222222;
 font-family:verdana;
 font-size:12px;
 text-align:center;
}

.chromesupport,.iesupport,.safarisupport,.firefoxsupport,.operasupport {
  width:20px; height:20px; float:left; margin-left:15px;background-repeat:no-repeat;
}
.iesupport    {background-image:url('../images/incompatible_ie2020.gif');}
.chromesupport  {background-image:url('../images/compatible_chrome2020.gif');}
.firefoxsupport {background-image:url('../images/incompatible_firefox2020.gif');}
.safarisupport  {background-image:url('../images/compatible_safari2020.gif');}
.operasupport {background-image:url('../images/compatible_opera2020.gif');}
</style>
<!-- <style>

.textArea:focus{
  outline-width: 0;
}

</style> -->

<link rel="stylesheet" type="text/css" href="/css/stdtheme.css" />

<script src="/js/Database.js"></script>
<script src="/js/clipboard.min.js"></script>

<script src="/js/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/ext-language_tools.js"></script>
<!-- <script>
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
  </script> -->

  <script>
    let allButtons = Array.from(document.querySelectorAll('.copy'));
    allButtons.forEach((item)=>{
      item.addEventListener('click',(ev)=>{
        let textArea = ev.target.closest('tr').querySelector('.textArea');
        textArea.focus();
        let text =  textArea.value; textArea.setSelectionRange(0,text.length);
        document.execCommand('copy');
        text =  textArea.value; textArea.setSelectionRange(0,0);
        $('item').tooltip(options)
      })
    })
  </script>

  <script type="text/javascript">
    var wsschoolsWebSQLOK = !!window.openDatabase;
    var statementSupport = document.getElementById("sSupport").value;
    if (wsschoolsWebSQLOK === true && statementSupport === "") {
      wsschoolsWebSQL1 = new wsWebSQLInit();
    } else {
      var ifr = document.getElementById("iframeResultSQL");
      var idoc = (ifr.contentWindow || ifr.contentDocument);
      if (idoc.document) idoc=idoc.document;
      idoc.write("<div style='margin:10px;font-family:verdana;font-size:12px;'>Click <b>'Run SQL'</b> to execute the SQL statement above.</div>");
    }

    function showDescription() {
      document.getElementById("descriptionDIV").style.display = "block";
    }

    function hideDescription() {
      document.getElementById("descriptionDIV").style.display = "none";
    }

    function wsschoolsSQLSubmit() {
      var txt;
      if (wsschoolsWebSQLOK === true && statementSupport === "") {
        wsschoolsWebSQL1.runSQL();
      } else {
        var t=document.getElementById("textareaCodeSQL").value;
        t=t.replace(/=/gi,"wsequalsign");
        wsschoolsNoWebSQLSubmit();
      }
    }

    function wsschoolsWriteDBInfo() {
      var txt;
      if (wsschoolsWebSQLOK === true && statementSupport === "") {
        document.getElementById("iframeResultSQL").style.display="none";
        document.getElementById("divResultSQL").style.display="block";
        document.getElementById("restoreDBBtn").style.display="inline";
        document.getElementById("nobrowsersupport").style.display="none";
        document.getElementById("nostatementsupport").style.display="none";   
        document.getElementById("yesbrowsersupport").style.display="block";
        wsschoolsWebSQL1.myDatabase();
      } else {
        if (wsschoolsWebSQLOK === true && statementSupport === "-1") {
          document.getElementById("nostatementsupport").style.display="block";
          document.getElementById("nobrowsersupport").style.display="none";
          document.getElementById("yesbrowsersupport").style.display="none";
          document.getElementById("yesbrowsersupport2").style.display="none";
          document.getElementById("websqlexplain").style.display="none";      
          document.getElementById("descriptionDIV").style.display = "block";
        } else {
          document.getElementById("nobrowsersupport").style.display="block";
          document.getElementById("nostatementsupport").style.display="none";
          document.getElementById("yesbrowsersupport").style.display="none";
          document.getElementById("yesbrowsersupport2").style.display="none";
        }
        document.getElementById("divResultSQL").style.display="none";
        document.getElementById("iframeResultSQL").style.display="inline";
        txt = '';
        txt = txt + '<table width="100%" cclass="reference notranslate">';
        txt = txt + '<tr><th style="text-align:left;">Tablenames</th><th style="text-align:right;">Records</th></tr>';
        txt = txt + '</tr><tr><td style="text-align:left;cursor:pointer;text-decoration:underline;" onclick="wsschoolsNoWebSQLSelectStar(\'Rep\')">Rep</td>';
        txt = txt + '<td style="text-align:right;">8</td>';
        txt = txt + '<tr><td style="text-align:left;cursor:pointer;text-decoration:underline;" onclick="wsschoolsNoWebSQLSelectStar(\'Customer\')">Customer</td>';
        txt = txt + '<td style="text-align:right;">91</td>';
        txt = txt + '</tr><tr><td style="text-align:left;cursor:pointer;text-decoration:underline;" onclick="wsschoolsNoWebSQLSelectStar(\'Orders\')">Orders</td>';
        txt = txt + '<td style="text-align:right;">10</td></tr>';
        txt = txt + '<tr><td style="text-align:left;cursor:pointer;text-decoration:underline;" onclick="wsschoolsNoWebSQLSelectStar(\'Order_Line\')">Order_Line</td>';
        txt = txt + '<td style="text-align:right;">518</td></tr>';
        txt = txt + '<tr><td style="text-align:left;cursor:pointer;text-decoration:underline;" onclick="wsschoolsNoWebSQLSelectStar(\'Part\')">Part</td>';
        txt = txt + '<td style="text-align:right;">29</td></tr>';
        txt = txt + '</table>';
        document.getElementById("yourDB").innerHTML = txt;
      }
    }

    function wsschoolsNoWebSQLSelectStar(x) {
      var sql = "SELECT * FROM " + x + ";";
      document.getElementById("textareaCodeSQL").value = sql;
      wsschoolsNoWebSQLSubmit();
    }

    function wsschoolsNoWebSQLSubmit() {
      var t = document.getElementById("textareaCodeSQL").value;
      document.getElementById("code").value = t;

      document.getElementById("tryitform").action="index.html?x=" + Math.random();
      validateForm();
      document.getElementById("tryitform").submit();
    }

    function validateForm() {
      var code=document.getElementById("code").value;
      if (code.length>5000) {
        document.getElementById("code").value="<h1>Error</h1>";
      }
    }

    wsschoolsWriteDBInfo();

  </script>
  <script src="/js/ws.js"></script>

  @endsection
