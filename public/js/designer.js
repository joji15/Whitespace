//
// DESIGNER JAVASCRIPT FUNCTIONS
// !!!For Whitespace Website use only!!!
//


//
//
// ADDING TABLES AND COLUMNS FUNCTIONS
//
//

var iCnt = 0;

function addDiv() {
  var tableCtn = document.getElementById("designer-area").childElementCount;
  var crowCtn = document.getElementById("connection-tbody").childElementCount;
  // alert(tableCtn);
  for (var i = 0; i <= tableCtn; i++) {
    var tblchk = "table"+i;
    // alert("Name:" + tblchk + "Length:" + $('#'+tblchk+'').length);
    if ($('#'+tblchk+'').length == 0) {
      iCnt = i;
      break;
    }
  }

  var element_pos = 0;    // POSITION OF THE NEWLY CREATED ELEMENTS.
  element_pos = element_pos + $('.designer-area').width() + 20;

  var modal_col = '<div class="modal fade" id="editTable'+iCnt+'" tabindex="1" role="dialog" aria-labelledby="modal_table_'+iCnt+'" aria-hidden="true" data-backdrop="static" data-keyboard="false">'+
    '<div class="modal-dialog modal-lg" role="document">'+
      '<div class="modal-content">'+
        '<div class="modal-header">'+
          '<h6 class="modal-title" id="modal_title">Edit Table</h6>'+
        '</div>'+
        '<div class="modal-body">'+
          '<div class="form-group row">'+
            '<div class="col-sm-4">'+
              '<label for="tablename'+iCnt+'" class="col-form-label">Table Name: </label>'+
            '</div>'+
            '<div class="col-sm-8">'+
              '<input type="text" id="tablename'+iCnt+'" onchange="namechk('+iCnt+')" class="form-control form-control-sm" aria-describedby="tablenamehelper" value="Table'+ iCnt +'" placeholder="Table'+ iCnt +'">'+
              '<span class="text-red" id="tablenameErr'+iCnt+'"></span>'+
            '</div>'+
          '</div>'+
          "<button id='addRow' class='btn btn-sm text-blue border-blue' title='Add Columns' style='margin:0px;' onclick='addRow("+iCnt+")'><span class='oi oi-plus'></span> Add Column</button>"+
          '<br />'+
          '<br />'+
          '<table id="table'+iCnt+'" style="width:100%">'+
            '<thead>'+
              '<tr style="font-size:11px">'+
                '<th style="width:20%">Name</td>'+
                '<th style="width:15%">Type</td>'+
                '<th style="width:10%"><abbr title="Length/Value">L/V</abbr></td>'+
                '<th style="width:15%">Default</td>'+
                '<th style="width:15%"><abbr title="Attributes">Attr</abbr></td>'+
                '<th style="width:3%">Null</td>'+
                '<th style="width:15%">Index</td>'+
                '<th style="width:3%"><abbr title="Auto Increment">A_I</abbr></td>'+
                '<th style="width:4%">Remove</td>'+
              '</tr>'+
            '</thead>'+
            '<tbody id="tbody'+iCnt+'">'+
              '<tr id="table'+iCnt+'column0">'+
                '<td style="width:20%"><input class="form-control form-control-sm" type="text" id="table'+iCnt+'column0name" value="id_'+iCnt+'" placeholder="Column Name"/></td>'+
                '<td style="width:15%"><select class="form-control form-control-sm" id="table'+iCnt+'column0type">'+
                  '<option value="INT">INT</option>'+
                  '<option value="FLOAT">FLOAT</option>'+
                  '<option value="DOUBLE">DOUBLE</option>'+
                  '<option value="VARCHAR">VARCHAR</option>'+
                  '<option value="TEXT">TEXT</option>'+
                  '<option value="BOOLEAN">BOOLEAN</option>'+
                  '<option value="DATE">DATE</option>'+
                  '<option value="DATETIME">DATETIME</option>'+
                '</select></td>'+
                '<td style="width:10%"><input class="form-control form-control-sm" id="table'+iCnt+'column0len" type="number" value="10" min="0" onkeydown="return false" step="5" /></td>'+
                '<td style="width:15%"><select class="form-control form-control-sm" id="table'+iCnt+'column0default" disabled>'+
                  '<option value="none">None</option>'+
                  '<option value="NULL">NULL</option>'+
                  '<option value="CURRENT_TIMESTAMP">CURRENT_TIMESTAMP</option>'+
                '</select></td>'+
                '<td style="width:15%"><select class="form-control form-control-sm" id="table'+iCnt+'column0attr" disabled>'+
                  '<option value="">None</option>'+
                  '<option value="UNSIGNED" selected>UNSIGNED</option>'+
                  '<option value="UNSIGNED ZEROFILL">UNSIGNED ZEROFILL</option>'+
                '</select></td>'+
                '<td style="width:3px;text-align:center;"><input type="checkbox" id="table'+iCnt+'column0null" disabled/></td>'+
                '<td style="width:15%"><select class="form-control form-control-sm" id="table'+iCnt+'column0index" disabled>'+
                  '<option value="PRIMARY">PRIMARY</option>'+
                '</select></td>'+
                '<td style="width:3%; text-align: center;"><input type="checkbox" id="table'+iCnt+'column0ai" checked/></td>'+
              '</tr>'+
            '</tbody>'+
          '</table>'+
        '</div>'+
        '<div class="modal-footer">'+
          '<button type="button" class="btn btn-primary btn-sm" onclick="updateRow('+iCnt+')">Save & Close</button>'+
        '</div>'+
      '</div>'+
    '</div>'+
  '</div>';

  $(modal_col).appendTo('#modal-area');
  tablenamedis = document.getElementById("table"+iCnt+"column0name").value;
  tablelendis = document.getElementById("table"+iCnt+"column0type").value + "(" + document.getElementById("table"+iCnt+"column0len").value + ")" ;

  var col = '<div class="resize_drag schema" id="table'+iCnt+'">'+
  '<div class="text-center schema-header">'+
    '<span id="tablename'+iCnt+'display" title="Unique ID = table'+iCnt+'">Table'+ iCnt +'</span>'+
    '<a style="text-decoration:none; font-color=red;" onclick="javascript:removeDiv('+iCnt+');"><span class="oi oi-x text-red" style="text-align:right; position: absolute; top: 0; right: 0; padding:3px;"></span></a>'+
    '<button style="text-align:right; position: absolute; top: 0; left: 0; padding:3px; background:none; border:none; height:20px;" data-toggle="modal" data-target="#editTable'+iCnt+'"><span class="oi oi-pencil text-blue border-black" style="    vertical-align: top;"></span></button>'+
    '<div class="ref-con" id="ref'+iCnt+'">'+
      
    '</div>'+
    '<div class="foreign-con" id="for'+iCnt+'">'+
      
    '</div>'+
  '</div>'+
  '<div class="schema-body">'+
    '<table id="table'+iCnt+'" style="width:100%">'+
      '<thead>'+
        '<tr style="font-size:10px">'+
          '<th style="width:10%"></td>'+
          '<th style="width:auto">Name</td>'+
          '<th style="width:auto">Type(Length)</td>'+
        '</tr>'+
      '</thead>'+
      '<tbody id="tbody'+iCnt+'display">'+
        '<tr id="table'+iCnt+'column0display">'+
          '<td style="text-align: center; width:10%"><p style="font-size:11px" id="table'+iCnt+'col0ico">'+primaryICO+'</p></td>'+
          '<td style="width:auto"><p style="font-size:11px" id="table'+iCnt+'col0name">'+tablenamedis+'</p></td>'+
          '<td style="width:auto"><p style="font-size:11px" id="table'+iCnt+'col0type_len">'+tablelendis+'</p></td>'+
        '</tr>'+
      '</tbody>'+
    '</table>'+
  '</div>'+
  '</div>';

  $(col).appendTo('.designer-area');

  iCnt++;
}

function modal_change(e) {
  var m_title = document.getElementById("modal_title");
  m_title.innerHTML = "Edit \"" + document.getElementById("tablename"+e+"").innerHTML + "\"";
}

function removeDiv(e) {
  $('#table'+e+'').remove();
  $('#editTable'+e+'').remove();
}

function namechk(e) {
  var originalTbl = document.getElementById("tablename"+e+"");
  var tableCtn = document.getElementById("designer-area").childElementCount;
  for (var i = 0; i <= tableCtn; i++) {
    var chktable = document.getElementById("tablename"+i+"");
    if (1 == 1) {
      if (chktable != originalTbl) {
        if (chktable.value == originalTbl.value) {
          document.getElementById("tablenameErr"+e+"").innerHTML = "The table name is already taken!";
          break;
        } 
        else {
          document.getElementById("tablenameErr"+e+"").innerHTML = "";
        }
      } 
      else {}
    } 
    else {
      
    }
  }
}

//
// Save Modal and Update Tables
//

function updateRow(e) {
  var tablename = "table"+ e;
  var tbodyname = "tbody"+ e;
  var iconStr;
  var nameStr;
  var typelenStr;
  var childCtn = document.getElementById(tbodyname).childElementCount - 1;
  var tbodydisplay = document.getElementById(""+tbodyname+"display");
  var tblnamedsply = document.getElementById("tablename"+e+"display");
  tblnamedsply.innerHTML = document.getElementById("tablename"+e+"").value;
  tbodydisplay.innerHTML = "";
  for (var i = 0; i <= childCtn; i++) {
    var tblnumcolnumindex = document.getElementById(tablename+"column"+i+"index");
    var tblnumcolnumname = document.getElementById(tablename+"column"+i+"name");
    var tblnumcolnumtype = document.getElementById(tablename+"column"+i+"type");
    var tblnumcolnumlen = document.getElementById(tablename+"column"+i+"len");
    if (tblnumcolnumindex.value == "PRIMARY") {
      iconStr = primaryICO;
    }
    else if ((tblnumcolnumindex.value == "UNIQUE")) {
      iconStr = uniqueICO;
    }
    else if (tblnumcolnumindex.value == "INDEX") {
      iconStr = indexICO;
    }
    else if ((tblnumcolnumtype.value == "VARCHAR")||(tblnumcolnumtype.value == "TEXT")) {
      iconStr = stringICO;
    }
    else if ((tblnumcolnumtype.value == "DATE")||(tblnumcolnumtype.value == "DATETIME")) {
      iconStr = dateICO;
    }
    else if ((tblnumcolnumtype.value == "INT")||(tblnumcolnumtype.value == "FLOAT")) {
      iconStr = numICO;
    }
    else {
      iconStr = defaultICO;
    }
    nameStr = tblnumcolnumname.value;
    typelenStr = tblnumcolnumtype.value+"("+tblnumcolnumlen.value+")";
    var columndis = '<tr id="'+tablename+'column'+i+'display">'+
        '<td style="text-align: center; width:10%"><span style="font-size:11px" id="table'+iCnt+'col0ico">'+iconStr+'</span></td>'+
        '<td style="width:auto"><span style="font-size:11px" id="table'+iCnt+'col0name">'+nameStr+'</span></td>'+
        '<td style="width:auto"><span style="font-size:11px" id="table'+iCnt+'col0type_len">'+typelenStr+'</span></td>'+
      '</tr>';
    $(columndis).appendTo('#tbody'+e+'display');
  }

  $('#editTable'+e+'').modal('hide');
}

var count = 1;
function addRow(a) {
  var tablename = "table"+ a;
  var tbodyname = "tbody"+ a;
  var childCtn = document.getElementById(tbodyname).childElementCount;
  rowObj = '<tr id="'+tablename+'column'+childCtn+'">'+
    '<td style="width:20%"><input class="form-control form-control-sm" value="'+ tablename+"column"+childCtn+'" type="text" id="'+ tablename+"column"+childCtn +'name" placeholder="Column Name"/></td>'+
    '<td style="width:15%"><select class="form-control form-control-sm" id="'+tablename+"column"+childCtn +'type">'+
      '<option value="INT">INT</option>'+
      '<option value="FLOAT">FLOAT</option>'+
      '<option value="DOUBLE">DOUBLE</option>'+
      '<option value="VARCHAR">VARCHAR</option>'+
      '<option value="TEXT">TEXT</option>'+
      '<option value="DATE">DATE</option>'+
      '<option value="DATETIME">DATETIME</option>'+
    '</select></td>'+
    '<td style="width:10%"><input class="form-control form-control-sm" id="'+tablename+"column"+childCtn +'len" type="number" min="0" onkeydown="return false" value="10" step="5" /></td>'+
    '<td style="width:15%"><select class="form-control form-control-sm" id="'+tablename+"column"+childCtn +'default">'+
      '<option value="none">None</option>'+
      '<option value="NULL">NULL</option>'+
      '<option value="CURRENT_TIMESTAMP">CURRENT_TIMESTAMP</option>'+
    '</select></td>'+
    '<td style="width:15%"><select class="form-control form-control-sm" id="'+tablename+"column"+childCtn +'attr">'+
      '<option value="">None</option>'+
      '<option value="UNSIGNED">UNSIGNED</option>'+
      '<option value="UNSIGNED ZEROFILL">UNSIGNED ZEROFILL</option>'+
    '</select></td>'+
    '<td style="width:3%; text-align: center;"><input type="checkbox" min="1" id="'+tablename+"column"+childCtn +'null"/></td>'+
    '<td style="width:15%"><select class="form-control form-control-sm" id="'+tablename+"column"+childCtn +'index">'+
      '<option value="">None</option>'+
      '<option value="UNIQUE">UNIQUE</option>'+
      '<option value="INDEX">INDEX</option>'+
    '</select></td>'+
    '<td style="width:3%; text-align: center;"><input type="checkbox" min="1" id="'+tablename+"column"+childCtn +'ai"/></td>'+
    '<td style="width:4%; text-align: center;"><a href="javascript:removeRow('+a+','+childCtn+');"><span class="oi oi-circle-x text-red pl-1 pr-1" style="font-size:12px"></span></a></td>'+
  '+</tr>'
  count++;
  $( '#tbody'+a+'' ).append(rowObj);

  var new_childCtn = childCtn + 1;

  for (var i = 0; i <= new_childCtn; i++) {
    
  }
}

function removeRow(x,y) {
  $('#table'+x+'column'+y+'').remove();
}


//
//
// EXPORTING TO AN SQL QUERY FILE
//
//


var primaryICO = '<span class="oi oi-key text-yellow" title="Primary Key"></span>';
var foreignICO = '<span class="oi oi-key text-grey" title="Foreign Key"></span>';
var indexICO = '<span class="oi oi-key text-blue" title="Index"></span>';
var uniqueICO = '<span class="oi oi-key text-grey" title="Index"></span>';
var stringICO = '<span class="oi oi-document text-blue" title=""></span>';
var numICO = '<span class="text-blue" title="">#</span>';
var dateICO = '<span class="oi oi-calendar text-blue" title=""></span>';
var boolICO = '<span class="oi oi-elevator text-teal" title=""></span>';
var defaultICO = '<span class="oi oi-file text-blue" title=""></span>';

function querytext(){
  var db_name = document.getElementById("Databasename").value;
  var tableCtn = document.getElementById("designer-area").childElementCount;
  var d = new Date();
  d.setDate(15);
  if((db_name == null) || (db_name == "")){
    db_name = "sample_db";
  }
  else {

  }

  var exportErr = '<div class="alert bg-whitesmoke text-black alert-dismissible fade show logintoast" role="alert">'+
    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
      '<span aria-hidden="true">&times;</span>'+
    '</button>'+
    '<p class="h4 alert-heading text-red">Error!</p>'+
    '<p></p>'+
  '</div>';

  var maindbTxt = 
  '-- \
  \r\-- Whitespace SQL Dump \
  \r\-- Generated at: '+ d +' \
  \r\-- \
  \r\
  \r\SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; \
  \r\SET AUTOCOMMIT = 0; \
  \r\START TRANSACTION; \
  \r\SET time_zone = "+00:00"; \
  \r\
  \r\/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */; \
  \r\/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */; \
  \r\/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */; \
  \r\/*!40101 SET NAMES utf8mb4 */; \
  \r\
  \r\-- \
  \r\-- Database: `'+ db_name +'` \
  \r\-- \
  \r\ ';

  var copydbTxt = maindbTxt;

  var engineTxt = 
  '\r\) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci; \
  \r\ ';

  var indextitleTxt = 
  '\r\-- \
  \r\-- Indexes for dumped tables \
  \r\-- \
  \r\ ';

  var aititleTxt = 
  '\r\-- \
  \r\-- AUTO_INCREMENT for dumped tables \
  \r\-- \
  \r\ ';

  var endTxt = 
  '\r\ ';

  var maintblTxt = "";
  var mainindexTxt = "";
  var mainaiTxt = "";
  var mainconstraintsTxt = "";
  for (var i = 0; i <= tableCtn; i++) {
    // Gets the table name in the value of the <span> tag.
    // Checks if a table exist
    if ($('#table'+i+'').length == 0) {
      // if it doesn't exist, skip the current table'n'.
      continue;
    }
    else {
      // else continue with the loop/.

      // DUMPING TABLES

      var tblname = document.getElementById("tablename"+i+"").value;
      var tblcontent = document.getElementById("tbody"+i).childElementCount - 1;
      var copytblTxt = 
      '\r\-- -------------------------------------------------------- \
      \r\
      \r\-- \
      \r\-- Table structure for table `'+tblname+'` \
      \r\-- \
      \r\
      \r\CREATE TABLE `'+tblname+'` ( \ ';

      var maincolumnTxt = "";
      var copycolumnTxt = "";

      // DUMPING COLUMNS TO TABLES

      for (var e = 0; e <= tblcontent; e++) {
        var colname = document.getElementById("table"+i+"column"+e+"name").value;
        var coltype = document.getElementById("table"+i+"column"+e+"type").value;
        var collen = '('+document.getElementById("table"+i+"column"+e+"len").value+')';
        var colattr = ' '+document.getElementById("table"+i+"column"+e+"attr").value;
        var coldefault = document.getElementById("table"+i+"column"+e+"default");
        var colnullable = document.getElementById("table"+i+"column"+e+"null");
        var colnull = "";

        if ((coldefault.value == "CURRENT_TIMESTAMP")&&(colnullable.checked == true)){
          colnull = " NULL DEFAULT CURRENT_TIMESTAMP"+collen;
        }
        else if ((coldefault.value == "CURRENT_TIMESTAMP")&&(colnullable.checked == false)){
          colnull = " DEFAULT CURRENT_TIMESTAMP"+collen;
        }
        else if ((coldefault.value == "None")&&(colnullable.checked == false)){
          colnull = " NOT NULL";
        }
        else if ((coldefault.value == "None")&&(colnullable.checked == true)){
          colnull = " NULL";
        }
        else if ((coldefault.value == "NULL")&&(colnullable.checked == true)){
          colnull = " NULL DEFAULT NULL";
        }

        copycolumnTxt = '\r\`'+colname+'` '+coltype+''+collen+''+colattr+colnull+', \ ';

        maincolumnTxt = maincolumnTxt + copycolumnTxt;
      }

      maintblTxt = maintblTxt + copytblTxt + maincolumnTxt + engineTxt;

      // DUMPING INDEXES

      var copyindexTxt = 
      '\r\-- \
      \r\-- Indexes for table `'+tblname+'` \
      \r\-- \
      \r\
      \r\ALTER TABLE `'+tblname+'` \ ';

      var mainkeyTxt = "";
      var copykeyTxt = "";

      // DUMPING KEYS TO INDEXES

      for (var d = 0; d <= tblcontent; d++) {
        var colname = document.getElementById("table"+i+"column"+d+"name").value;
        var colindex = document.getElementById("table"+i+"column"+d+"index");
        var colkey;

        if (colindex.value == "") {
          continue;
        }
        else if (colindex.value == "PRIMARY") {
          colkey = "ADD PRIMARY KEY (`"+colname+"`);";
        }
        else if (colindex.value == "INDEX") {
          colkey = "ADD KEY `"+colname+"` (`"+colname+"`);";
        }
        else if (colindex.value == "UNIQUE") {
          colkey = "ADD UNIQUE KEY `"+colname+"` (`"+colname+"`);";
        }

        copykeyTxt = '\r\ '+colkey+'  \ ';

        mainkeyTxt = mainkeyTxt + copykeyTxt;

      }

      mainindexTxt = mainindexTxt + copyindexTxt + mainkeyTxt + endTxt;

      // DUMPING AUTO INCREMENTS

      var copyaiTxt = 
      '\r\-- \
      \r\-- AUTO_INCREMENT for table `'+tblname+'` \
      \r\-- \
      \r\
      \r\ALTER TABLE `'+tblname+'` \ ';

      var mainmodTxt = "";
      var copymodTxt = "";

      // DUMPING MODIFICATIONS TO A_I

      for (var m = 0; m <= tblcontent; m++) {
        var colname = document.getElementById("table"+i+"column"+m+"name").value;
        var coltype = document.getElementById("table"+i+"column"+m+"type").value;
        var collen = '('+document.getElementById("table"+i+"column"+m+"len").value+')';
        var colindex = document.getElementById("table"+i+"column"+m+"index");
        var colai = document.getElementById("table"+i+"column"+m+"ai");
        var colmod;
        var coltest = "table"+i+"column"+m+"index";

        if (colindex.value == "PRIMARY") {
          colmod = "MODIFY (`"+colname+"`) "+coltype+""+collen+" UNSIGNED NOT NULL AUTO_INCREMENT;";
        }
        else if (colai.checked == false) {
          continue;
        }
        else if (colai.checked == true) {
          colmod = "MODIFY (`"+colname+"`) "+coltype+""+collen+" UNSIGNED NOT NULL AUTO_INCREMENT;";
        }

        copymodTxt = '\r\ '+colmod+'  \ ';

        mainmodTxt = mainmodTxt + copymodTxt;
      }
      mainaiTxt = mainaiTxt + copyaiTxt + mainmodTxt + endTxt;
    }
  }

  maindbTxt = maindbTxt + maintblTxt + indextitleTxt + mainindexTxt + aititleTxt + mainaiTxt +
  '\r\COMMIT; \ '+

  '\r\/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */; \ '+
  '\r\/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */; \ '+
  '\r\/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;';
  
  var element = document.getElementById("testtxt2");
  element.innerHTML = maindbTxt;


  $('#blank2').attr('download', db_name+'.sql');
  $('#blank2').attr('href', 'data:application/sql; charset=utf-8,' + encodeURIComponent(maindbTxt));
  $('#blank2')[0].click();
}

//
//
// SAVE THE DESIGN TO AN IMAGE ()
//
//


function saveScreen(){
  var caption = "sample";
  html2canvas(document.getElementById('contentarea')).then(function(canvas){
    $('#blank').attr('download', caption + '.png');
    $('#blank').attr('href', canvas.toDataURL("image/png"));
    $('#blank')[0].click();
  });
}


//
//
// CONNECTION WITH CROWS_FOOTS
//
//


var optionMany ='<svg height="20" width="40"> <!-- Optional Many -->'+
    '<line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->'+
    '<circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->'+
    '<line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->'+
    '<line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->'+
    '<line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->'+
  '</svg>';
var optionOne = '<svg height="20" width="40"> <!-- Optional One -->'+
    '<line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->'+
    '<circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->'+
    '<line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->'+
    '<line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" />     <!-- | -->'+
  '</svg>';
var manMany = '<svg height="20" width="40"> <!-- Mandatory Many -->'+
    '<line x1="13" y1="0" x2="13" y2="20" stroke="black" stroke-width="2" />     <!-- | -->'+
    '<line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />     <!-- —— -->'+
    '<line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->'+
    '<line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->'+
  '</svg>';
var manOne = '<svg height="20" width="40"> <!-- Mandatory One -->'+
    '<line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" /> <!-- —— -->'+
    '<line x1="20" y1="0" x2="20" y2="20" stroke="black" stroke-width="2" /> <!-- | -->'+
    '<line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" /> <!-- | -->'+
  '</svg>';

var optionManyRev = '<svg height="20" width="40" class="rotate-90"> <!-- Optional Many -->'+
    '<line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->'+
    '<circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->'+
    '<line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->'+
    '<line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->'+
    '<line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->'+
  '</svg>';
var optionOneRev = '<svg height="20" width="40" class="rotate-90"> <!-- Optional One -->'+
    '<line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />      <!-- —— -->'+
    '<circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" /> <!-- o -->'+
    '<line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />    <!-- —— -->'+
    '<line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" />     <!-- | -->'+
  '</svg>';
var manManyRev = '<svg height="20" width="40" class="rotate-90"> <!-- Mandatory Many -->'+
    '<line x1="13" y1="0" x2="13" y2="20" stroke="black" stroke-width="2" />     <!-- | -->'+
    '<line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />     <!-- —— -->'+
    '<line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />     <!-- / -->'+
    '<line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />    <!-- \ -->'+
  '</svg>';
var manOneRev = '<svg height="20" width="40" class="rotate-90"> <!-- Mandatory One -->'+
    '<line x1="0" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" /> <!-- —— -->'+
    '<line x1="20" y1="0" x2="20" y2="20" stroke="black" stroke-width="2" /> <!-- | -->'+
    '<line x1="30" y1="0" x2="30" y2="20" stroke="black" stroke-width="2" /> <!-- | -->'+
  '</svg>';

var foreign_ctn = 0;
var crowsfoot_ctn = 0;

function connection() {

}

function removeCrowsCon(e) {
  $('#foreign'+e+'').remove();

  var removeCCTxt = '<tr id="crow-info">'+
    '<td colspan="5">'+
      '<p class="h6">Add a Crows-Foot Connection...</p>'+
    '</td>'+
  '</tr>'; 
  var crowCtn = document.getElementById("connection-tbody").childElementCount;
  if (crowCtn == 0) {
    $(removeCCTxt).appendTo('#connection-tbody');
  } 
  else {
    
  }
}

function addCrowsCon() {
  var crowCtn = document.getElementById("connection-tbody").childElementCount;
  var tableCtn = document.getElementById("designer-area").childElementCount;
  
  // Keeping the ID count in check.
  for (var i = 0; i <= crowCtn; i++) {
    var crowchk = "foreign"+i;
    if ($('#'+crowchk+'').length == 0) {
      crowsfoot_ctn = i;
      break;
    }
  }

  if ((tableCtn != 0)&&(tableCtn >= 2)) {
    if ($('#crow-info').length != 0) {
      $('#crow-info').remove();
    }
    else {}
    var mainforeignTbl = "";
    for (var i = 0; i <= tableCtn; i++) {
      if ($('#table'+i+'').length == 0) {continue;}
      else {
        var tblnamedis = document.getElementById("tablename"+i+"display").innerHTML;
        var copyforeignTbl = '\r\<option value="table'+i+'" title="table'+i+'">'+tblnamedis+'</option>';
        mainforeignTbl = mainforeignTbl + copyforeignTbl;
      }
    }
    // alert(mainforeignTbl);

    var crows_str = '<tr id="foreign'+crowsfoot_ctn+'">'+
      '<td style="width: 20%">'+
        '<select class="form-control form-control-sm" name="for_table" id="foreign'+crowsfoot_ctn+'tableA">'+
          ''+ mainforeignTbl +
        '</select>'+
      '</td>'+
      '<td style="width: 20%">'+
        '<select class="form-control form-control-sm" name="foreign-relationship" onchange="updateCrow(svgContainer'+crowsfoot_ctn+', foreign'+crowsfoot_ctn+'cardA)" id="foreign'+crowsfoot_ctn+'cardA">'+
          '<option value="opOne">Optional One</option>'+
          '<option value="opMany">Optional Many</option>'+
          '<option value="mdOne">Mandatory One</option>'+
          '<option value="mdMany">Madatory Many</option>'+
        '</select>'+
      '</td>'+
      '<td style="width: 20%">'+
        '<select class="form-control form-control-sm" name="ref_table" id="foreign'+crowsfoot_ctn+'tableB">'+
          ''+ mainforeignTbl +
        '</select>'+
      '</td>'+
      '<td style="width: 20%">'+
        '<select class="form-control form-control-sm" name="reference-relationship" onchange="updateCrow(svgContainer'+crowsfoot_ctn+', foreign'+crowsfoot_ctn+'cardB)" id="foreign'+crowsfoot_ctn+'cardB">'+
          '<option value="opOne">Optional One</option>'+
          '<option value="opMany">Optional Many</option>'+
          '<option value="mdOne">Mandatory One</option>'+
          '<option value="mdMany">Madatory Many</option>'+
        '</select>'+
      '</td>'+
      '<td style="width: 10%;">'+
        '<button class="btn btn-sm bg-transparent" onclick="removeCrowsCon('+crowsfoot_ctn+')"><span class="oi oi-circle-x text-red" title="Delete Connection"></span></button>'+
      '</td>'+
    '</tr>';
    $(crows_str).appendTo('#connection-tbody');
    crowsfoot_ctn++;
  }
  else if (tableCtn < 2) {
    alert("Add atleast two tables to add a connection!");
  }
}

var crowArray = [];

function updateConn() {
	var crow = document.getElementById("connection-tbody").children;
  var crowCtn = document.getElementById("connection-tbody").childElementCount;
  var tableCtn = document.getElementById("designer-area").childElementCount;
  var errCtn = 0;

  // for (var i = 0; i < crow.length; i++) {
  // 	crowArray[crowArray.length] = {tableA: document.getElementById(crow[i].id+'tableA').value, cardA: document.getElementById(crow[i].id+'cardA').value, tableB: document.getElementById(crow[i].id+'tableB').value, cardB: document.getElementById(crow[i].id+'cardB').value};
  // 	console.log(crowArray[i]);
  // }
  // $('#connectionModal').modal('hide');

  if ((document.getElementById('crow-info') == null)&&(crow.length >= 1)&&(tableCtn >= 2)) {
  	var for_table_A;
    var for_table_B;
    var for_card_A;
    var for_card_B;
    var sidenavWidth = $("#navbarmenu").width();

    for (var i = 0; i < crow.length; i++) {
    	for_table_A = document.getElementById(crow[i].id+'tableA').value;
      for_table_B = document.getElementById(crow[i].id+'tableB').value;
      for_card_A = document.getElementById(crow[i].id+'cardA').value;
      for_card_B = document.getElementById(crow[i].id+'cardB').value;
    	if (for_table_A == for_table_B) {
    		alert("A Crows-Foot cannot have a connection using one table");
          break;
    	} 
    	else {}
    	table_A_num = for_table_A.substr(5); // Gets the table number for tableA
      table_B_num = for_table_B.substr(5); // Gets the table number for tableB

      var box1 = $("#for"+table_A_num+"").position();
      var box2 = $("#ref"+table_B_num+"").position();
      var box1x = box1.left - sidenavWidth + 39;
      var box1y = box1.top - 72 + 10;
      var box2x = box2.left - sidenavWidth;
      var box2y = box2.top - 72 + 10;
      var lx = box1x - box2y;
      var connectorStr = 
      '<div id="svgContainer'+i+'" style="position:fixed">' +
        '<svg height="1000px" width="1000px" id="svgconnect"><path id="line'+i+'" d="M 0 0 L 0 0" stroke="black" stroke-width="2" fill="none" /></svg>'+
      '</div>';  
      $(connectorStr).appendTo('#svgContainer');
      if (for_card_A == "opOne") {
        $(optionOneRev).appendTo('#for'+table_A_num+'');
      }
      else if (for_card_A == "opMany") {
        $(optionManyRev).appendTo('#for'+table_A_num+'');
      }
      else if (for_card_A == "mdOne") {
        $(manOneRev).appendTo('#for'+table_A_num+'');
      }
      else if (for_card_A == "mdMany") {
        $(manManyRev).appendTo('#for'+table_A_num+'');
      }

      if (for_card_B == "opOne") {
        $(optionOne).appendTo('#ref'+table_B_num+'');
      }
      else if (for_card_B == "opMany") {
        $(optionMany).appendTo('#ref'+table_B_num+'');
      }
      else if (for_card_B == "mdOne") {
        $(manOne).appendTo('#ref'+table_B_num+'');
      }
      else if (for_card_B == "mdMany") {
        $(manMany).appendTo('#ref'+table_B_num+'');
      }
      $("#line"+i+"").attr("d", "M "+box1x+" "+box1y+" L "+box2x+" "+box2y+"");
    }
    $('#connectionModal').modal('hide');
  } 

  else if (document.getElementById('crow-info') != null) {}
  else if ((tableCtn < 2)||(crowCtn < 1)) {}
}

function sidenavfunc() {
  if($(window).width() <=575){
    $('#sidenavbar').addClass("collapse");
    //  If the window is less than or equal to 575 pixels, add the collapse class or hide the navbar
  }
  else
    $('#sidenavbar').removeClass("collapse");
    //  If the window is less than or equal to 575 pixels, remove the collapse class or unhide the navbar
}

function designerScroll(){
  for (var i = 0; i < crowsfoot_ctn; i++) {
      for_table_A = document.getElementById('foreign'+i+'tableA').value;
      for_table_B = document.getElementById('foreign'+i+'tableB').value;

      table_A_num = for_table_A.substr(5); // Gets the table number for tableA
      table_B_num = for_table_B.substr(5); // Gets the table number for tableB
      var sidenavWidth = $("#navbarmenu").width();
      var box1 = $("#for"+table_A_num+"").position();
      var box2 = $("#ref"+table_B_num+"").position();
      var box1x = box1.left - sidenavWidth + 39;
      var box1y = box1.top - 72 + 10;
      var box2x = box2.left - sidenavWidth;
      var box2y = box2.top - 72 + 10;
      $("#line"+i+"").attr("d", "M "+box1x+" "+box1y+" L "+box2x+" "+box2y+"");
    }
}
