@extends('layouts.studentapp')

@section('title', 'SQL Designer')

@section('content')

<div class="container-fluid p-0 d-none" id="mobileDesignerErr" style="font-family: Segoe UI; font-weight:lighter; text-align: center;">
  <br>
  <br>
  <span class="bg-red text-white display-4 pr-4 pl-4" style="font-weight: bold; border-radius: 10px">!</span>
  <br>
  <br>
  <p class="h2" style="font-weight:lighter;">You are using a device that has a mobile resolution</p>
  <p class="h4" style="font-weight:lighter;">The SQL Designer is for desktop use only!</p>
</div>
<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content p-0" id="studentDesContent">
  <div class="container-fluid p-0" id="mainDesignerPage">
    <!-- <hr />
    <p class="h2" style="font-family:Segoe UI Light;">
    SQL Designer
  </p>
  <hr /> -->
  <div class="row">
    <div class="col-sm-12 area follow-me backcontent" id="contentarea" style="overflow:scroll" onscroll="designerScroll()">
      <div id="svgContainer" style="position:fixed"></div>
      <div class="container designer-area m-0 p-0" id="designer-area" style="width: initial; min-height:1000px; max-height:2000px; min-width:1000px; max-width:2000px; position:absolute;">
      </div>
    </div>
    <nav class="main-menu">
      <ul>
        <li>
          <a href="javascript:addDiv()" id="add">
            <i class="fa fa-plus fa-2x text-green"></i>
            <span class="nav-text text-blue deslink">
              Add Table
            </span>
          </a>
        </li>
        <li class="has-subnav">
          <a>
            <button class="button" id="edit_con" data-target="#connectionModal" data-toggle="modal" onclick="connection()">
              <i class="fa fa-code-fork fa-2x text-yellow"></i>
              <span class="nav-text text-blue deslink">
                Connect
              </span>
            </button>
          </a>
        </li>
        <li class="has-subnav">
          <a href="javascript:saveScreen();">
            <i class="fa fa-save fa-2x text-red"></i>
            <span class="nav-text text-blue deslink">
              Save as image
            </span>
          </a>
          <a href="" id="blank"></a>
        </li>
        <li class="has-subnav">
          <a>
            <button class="button" id="save_query" data-target="#savequery" data-toggle="modal">
              <i class="fa fa-download fa-2x text-indigo"></i>
              <span class="nav-text text-blue deslink" >
                Export Query
              </span>
            </button>
          </a>
        </li>
      </ul>
    </nav>
    <div class="col-12-sm" id="modal-area">
      <div class="modal fade" id="savequery" tabindex="-1" role="dialog" aria-labelledby="savequery" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="savequerytitle">Save SQL Query</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="Databasename" class="col-sm-4 col-form-label">Database Name: </label>
                <div class="col-sm-8">
                  <input type="text" id="Databasename" class="form-control form-control-sm" aria-describedby="databasenamehelper" placeholder="sample_db">
                </div>
              </div>
              <label for="testtxt2">Export Output:</label>
              <pre id="testtxt2" style="font-size: 12px;"></pre>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <a href="javascript:querytext();" type="button" class="btn btn-primary btn-sm">Save SQL File</a>
              <a href="" id="blank2"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" id="connectionModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body text-center">
              <p class="h4 modal-title">Crows-Foot Connection</p>
              <br>
              <p class="h5" style="text-align: left"><a class="bg-transparent text-blue" href="javascript:addCrowsCon();" style="font-size:14px;"><span class="oi oi-plus text-green" title="Delete Connection"></span> Add Connection</a></p>
              <table style="width:100%" id="connection-table">
                <thead>
                  <tr style="font-size:11px">
                    <th style="width: 20%">Table</th>
                    <th style="width: 20%">Cardinality</th>
                    <th style="width: 20%">Table</th>
                    <th style="width: 20%">Cardinality</th>
                    <th style="width: 10%; text-align: center;">Remove</th>
                  </tr>
                </thead>
                <tbody id="connection-tbody">
                  <tr id="crow-info">
                    <td colspan="5">
                      <p class="h6">Add a Crows-Foot Connection...</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary btn-sm" name="button" onclick="updateConn()">Save &amp; Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
<link href="/css/designer.css" rel="stylesheet">

<script src="/js/interact.js"></script>
<script src="/js/FileSaver.min.js"></script>
<script src="/js/designer.js"></script>

<script>
  interact('.resize_drag')
  .draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    restrict: {
      restriction: "parent",
      endOnly: true,
      elementRect: { top: 0, left: 0, bottom: 0, right: 0 }
    },
    // enable autoScroll
    autoScroll: true,

    // call this function on every dragmove event
    onmove: dragMoveListener,
    // call this function on every dragend event
    onend: function (event) {
      // var textEl = event.target.querySelector('p');

      // textEl && (textEl.textContent =
      //   'moved a distance of '
      //   + (Math.sqrt(Math.pow(event.pageX - event.x0, 2) +
      //     Math.pow(event.pageY - event.y0, 2) | 0))
      //   .toFixed(2) + 'px');
    }
  })
  .resizable({
    // resize from all edges and corners
    edges: { left: true, right: true, bottom: true, top: true },

    // keep the edges inside the parent
    restrictEdges: {
      outer: 'parent',
      endOnly: true,
    },

    // minimum size
    restrictSize: {
      min: { width: 100, height: 50 },
    },

    inertia: true,
  })
  .on('resizemove', function (event) {
    var target = event.target,
    x = (parseFloat(target.getAttribute('data-x')) || 0),
    y = (parseFloat(target.getAttribute('data-y')) || 0);

    // update the element's style
    target.style.width  = event.rect.width + 'px';
    target.style.height = event.rect.height + 'px';

    // translate when resizing from top or left edges
    x += event.deltaRect.left;
    y += event.deltaRect.top;

    target.style.webkitTransform = target.style.transform =
    'translate(' + x + 'px,' + y + 'px)';

    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);

  });

  function dragMoveListener (event) {
    var target = event.target,
      // keep the dragged position in the data-x/data-y attributes
      x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
      y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    // translate the element
    target.style.webkitTransform =
    target.style.transform =
    'translate(' + x + 'px, ' + y + 'px)';

    // update the posiion attributes
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);

    // connection information
    
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

  // this is used later in the resizing and gesture demos
  window.dragMoveListener = dragMoveListener;
</script>

@endsection