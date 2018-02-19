@extends('layouts.studentapp')

@section('title', 'SQL Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studlessonContent">
  <div class="container-fluid contentMargin">
    <br>
    <p class="h2" style="font-family:Segoe UI Light;">
      <span class="oi oi-book text-yellow" title="SELECT Clause" aria-hidden="true"></span> <em>SELECT</em> Clause
    </p>
    <div class="row">
      <div class="col-12">
        <ul class="nav nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="select-all-tab" data-toggle="pill" href="#select-all" role="tab" aria-controls="select-all" aria-selected="true">Select Statement <span class="oi oi-question-mark" title="How to use SELECT statement" aria-hidden="true"></span></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="select-distinct-tab" data-toggle="pill" href="#select-distinct" role="tab" aria-controls="select-distinct" aria-selected="false">SELECT DISTINCT <span class="oi oi-question-mark" title="How to use SELECT DISTINCT statement" aria-hidden="true"></span></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="arithmetic-operators-tab" data-toggle="pill" href="#arithmetic-operators" role="tab" aria-controls="arithmetic-operators" aria-selected="false">Arithmetic Operators <span class="oi oi-question-mark" title="How to use Arithmetic Operators" aria-hidden="true"></span></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="column-alias-tab" data-toggle="pill" href="#column-alias" role="tab" aria-controls="column-alias" aria-selected="false">Column Alias <span class="oi oi-question-mark" title="How to define column alias" aria-hidden="true"></span></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" id="null-values-tab" data-toggle="pill" href="#null-values" role="tab" aria-controls="null-values" aria-selected="false">Null Values <span class="oi oi-question-mark" title="How to define null values" aria-hidden="true"></span></a>
          </li>
        </ul>        
        <hr>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="tab-content" id="pills-tabContent">
            <!--SELECT ALL-->
            <div class="tab-pane fade show active" id="select-all" role="tabpanel" aria-labelledby="select-all-tab">         
               <div class="row">
                 <div class="col-12">
                    <div class="lead text-left">
                      <span class="oi oi-book"></span> Select Statement
                    </div>
                    <div>
                      <pre class="form-control noresize" style=" text-align: justify;">
                       <p style="margin-top: -20px;"><strong>SELECT</strong> statement is used to select data from a database. A <strong>SELECT</strong> statement must include the following:</p>
                       <ul style="margin-top: -70px;">
                         <li><strong>SELECT clause.</strong> Specifies the columns to be displayed.</li>
                         <li style="margin-top: -20px;"><strong>FROM clause.</strong> Specifies the table containing the columns that are listed in the <strong>SELECT</strong> clause.</li>
                       </ul>                        
                       <div class="alert alert-info" style="margin-top: -70px;"><strong>Syntax:</strong><p class="mt-1"> <span class="var-highlight">SELECT </span><i>column_name(s)</i><br> <span class="var-highlight">FROM</span> <i>table_name</i></p></div>
                       <ul>
                         <li style="margin-top: -60px;">The <strong>asterisk (*)</strong> can be used to <i>select all</i> the available columns and records from a table.</li>
                         <li style="margin-top: -20px;">To display <i>specific columns</i> of the table, specify the <strong>column names</strong> separated by <strong>commas (,)</strong> in the order which you want them to appe</li>
                       </ul>
                       <div class="alert alert-warning" style="margin-top: -50px;"><strong>Try:</strong><ol><li class="mt-1">Select all columns from customer's table</li><li>List the number, name and balance for all customers.</li><li>Display the part_num, class, description and price from the part table.</li><li>List the complete part table.</li><li>Look for the rep_num, first_name, last_name and rate of the representatives (rep)</li></ol></div>
                    </pre>
                  </div>
               </div>
             </div>
           </div>
          <!--SELECT DISTINCT-->
          <div class="tab-pane fade" id="select-distinct" role="tabpanel" aria-labelledby="select-distinct-tab">
            <div class="row">
               <div class="col-12">
                  <div class="lead text-left">
                    <span class="oi oi-book"></span> Select Distinct
                  </div>
                  <div>
                    <pre class="form-control noresize" style=" text-align: justify;">
                      <p style="margin-top: -20px;">Some columns may contain duplicate values. This is not a problem; however, sometimes you will want to list only the different (distinct) values in a table.</p>
                      <div class="alert alert-info" style="margin-top: -40px;"><strong>Syntax:</strong><p class="mt-1"> <span class="var-highlight">SELECT DISTINCT </span><i>column_name(s)</i><br> <span class="var-highlight">FROM</span> <i>table_name</i></p></div>
                      <p style="margin-top: -30px;"><strong>DISTINCT</strong> keyword can be used to return only different values.</p>
                    </pre>
                  </div>
               </div>
             </div>
          </div>
          <!--ARITHMETIC OPERATORS-->
          <div class="tab-pane fade" id="arithmetic-operators" role="tabpanel" aria-labelledby="arithmetic-operators-tab">
            <div class="row">
               <div class="col-12">
                  <div class="lead text-left">
                    <span class="oi oi-book"></span> Arithmetic Operators
                  </div>
                  <div>
                    <pre class="form-control noresize" style=" text-align: justify;">
                      <p style="margin-top: -20px;"><strong>Rules of Precedence:</strong> <ul><li>Multiplication and division occur before addition and subtraction</li><li>Operators of the same priority are evaluated from left to right</li><li>Parenthesis are used to override the default precedence to clarify the statement</li></ul></p><!--<div class="alert alert-info"><strong>Example:</strong></div><video width="100%" autoplay="true" controls="true"><source src="{{ asset('vid/Rules of Precedence.mp4') }}" type="video/mp4"></video>--><div class="alert alert-warning"><strong >Try the following queries:</strong><ul class="mt-1"><li class="mb-1"><span class="string-highlight">SELECT</span> part_num, description, on_hand * price <br/><span class="string-highlight">FROM</span> part</li><li class="mb-1"><span class="string-highlight">SELECT</span> description, class, on_hand + 10 <br/><span class="string-highlight">FROM</span>  part</li><li><span class="string-highlight">SELECT</span> part_num, description, price * (on_hand + 10)<br/><span class="string-highlight">FROM</span> part</li></ul></div><div class="alert alert-success"><strong>Try to answer:</strong><ul><li>A customer's balance has an annual interest of 2%. List the name, city, balance with 2% interest and credit_limit.</li><li>Modify your query. Subtract the credit limit from the balance.</li></ul></div>
                    </pre>
                  </div>
               </div>
             </div>
          </div>
          <!--COLUMN ALIAS-->
          <div class="tab-pane fade" id="column-alias" role="tabpanel" aria-labelledby="column-alias-tab">
            <div class="row">
               <div class="col-12">
                  <div class="lead text-left">
                    <span class="oi oi-book"></span> Column Alias
                  </div>
                  <div>
                    <pre class="form-control noresize" style=" text-align: justify;">
                      <p style="margin-top: -20px;"><strong>Column Alias:</strong> <ul><li>Renames a column heading</li><li>Is useful with calculations</li><li>Immediately follows the column name</li></ul></p><div class="alert alert-warning"><strong >Try</strong><ol class="mt-1"><li class="mb-1">List the part number, description and multiply the on hand to the price then rename it as TOTAL PRICE</li><li class="mb-1">A customer's balance has an annual interest of 2%. List the name, city, balance and credit_limit. Rename the balance to ANNUAL BALANCE.</li></ol></div>
                    </pre>
                  </div>
               </div>
             </div>
          </div>
          <!--NULL VALUES-->
          <div class="tab-pane fade" id="null-values" role="tabpanel" aria-labelledby="null-values-tab">
            <div class="row">
               <div class="col-12">
                  <div class="lead text-left">
                    <span class="oi oi-book"></span> Null Values
                  </div>
                  <div>
                    <pre class="form-control noresize" style=" text-align: justify;">
                      <p style="margin-top: -20px;"><strong>Properties of NULL values:</strong> <ul><li><strong>NULL</strong> values represent missing unknown data.</li><li>By default, a table column can hold <strong>NULL</strong> values</li><li>If a column in a table is optional, we can insert a new record or update an existing record without adding a value to this column. This means that the field will be saved with a <strong>NULL</strong> value.</li><li><strong>NULL</strong> values  are treated differently from other values. <strong>NULL</strong>  is used as a placeholder for unknown or inapplicable values.</li></ul></p><strong class="string-highlight">IS NULL</strong><div class="alert alert-info" ><strong>Syntax:</strong><p class="mt-1"> <span class="var-highlight">SELECT </span><i>column_name(s)</i><br> <span class="var-highlight">FROM</span> <i>table_name</i><br> <span class="var-highlight">WHERE </span><i>column_name</i> <span class="var-highlight">IS NULL</span></p></div><strong class="string-highlight">IS NOT NULL</strong><div class="alert alert-info" ><strong>Syntax:</strong><p class="mt-1"> <span class="var-highlight">SELECT </span><i>column_name(s)</i><br> <span class="var-highlight">FROM</span> <i>table_name</i><br> <span class="var-highlight">WHERE </span><i>column_name</i> <span class="var-highlight">IS NOT NULL</span></p></div><div class="alert alert-warning"><strong >Try</strong><ol class="mt-1"><li class="mb-1">List all customers that has a null city.</li><li class="mb-1">List all customers that has a value in city.</li></ol></div>
                    </pre>
                  </div>
               </div>
             </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="lead text-left">
            <span class="oi oi-code"></span> Try here!
        </div>
        <div id="contentSQL">
           <form method="post" target="view" id="tryitform" name="tryitform" onsubmit="validateForm();">
              <div style="clear:both;"></div>
                   <textarea style="font-size: 13px;" class="form-control" id="textareaCodeSQL" wrap="logical" rows="18"></textarea>
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
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-4 mb-2" style="display: none;">
             <div class="card no-shadow">
                <div class="card-header p-2">
                  <div class="row">
                    <div class="col-7" style="font-size: 16px;">
                       &nbsp;&nbsp;<span class="oi oi-project" title="Databases" aria-hidden="true"></span> Databases
                     </div>
                     <div class="col-5">
                       <button title="Restore the database back to its original content" class="btn btn-danger btn-sm pt-0 pb-0" id="restoreDBBtn" type="button" onclick="wsschoolsWebSQL1.wsClearDatabase()" style="display:none;">Restore</button>
                      </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-12 mb-2">
                <div id="resultSQL">
                  <iframe id="iframeResultSQL" frameborder="0" name="view"></iframe>
                    <p class="h6" style="font-weight: lighter;">Results:</p>
                      <div id="divResultSQL" style="font-size: 13px; min-height: 100px; max-height: 250px;" class="form-control">
                        <div>Create SQL Statement to be executed</div>
                      </div>
                </div>
              </div>
              <div class="col-5 mb-4">  
                <div id="tables_accrdn" data-children=".item">
                  <div class="item">
                     <a data-toggle="collapse" data-parent="#tables_accrdn" href="#tables_accrdn1" aria-expanded="true" aria-controls="tables_accrdn1">
                        <span class="oi oi-spreadsheet" title="Tables" aria-hidden="true"></span> Tables
                     </a>
                   <div id="tables_accrdn1" class="collapse" role="tabpanel">
                      <br />
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
                                    <h3 style="color:#8AC007;">WebSQL</h3>
                                    <p>WebSQL stores a Database locally, on the user's computer. Each user gets their own Database object.</p>
                                    <!--<p>WebSQL was intended to be the standard Database Object in HTML5, however, W3C has announced that WebSQL will not be maintained any further.<p>-->
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
                                 <div id="yourDB" style="margin-top: -23px;"></div>
                                 <div id="yourRC"></div>
                                 <div id="yourIX"></div>
                               </div>
                             </div>
                          </div>
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
.var-highlight{
    color: #C0AD60;
}
.string-highlight{
    color: rgba(253, 149, 90, 0.8);
}

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
</style>
<link rel="stylesheet" type="text/css" href="/css/stdtheme.css" />

<script src="/js/Database.js"></script>
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
      var code=document.getElementById("code").value
      if (code.length>5000) {
        document.getElementById("code").value="<h1>Error</h1>";
      }
    }

    wsschoolsWriteDBInfo();

  </script>
  <script src="/js/ws.js"></script>
@endsection
