@extends('layouts.studentapp')

@section('title', 'SQL Designer')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studentDesContent">
  <div class="w-100 contentMargin">
    <div class="row">
      <nav class="main-menu">
        <ul>
          <li>
            <button class="button">
              <i class="fa fa-plus fa-2x text-green"></i>
              <span class="nav-text text-blue">
                Add Table
              </span>
            </button>
          </li>
          <li class="has-subnav">
            <button class="button">
              <i class="fa fa-times fa-2x text-red"></i>
              <span class="nav-text text-blue">
                Remove Table
              </span>
            </button>
          </li>
          <li class="has-subnav">
            <button class="button">
              <i class="fa fa-code-fork fa-2x text-blue-grey"></i>
              <span class="nav-text text-blue">
                Connect
              </span>
            </button>
          </li>
          <li class="has-subnav">
            <a href="javascript:saveScreen();" class="button">
              <i class="fa fa-save fa-2x text-yellow"></i>
              <span class="nav-text text-blue">
                Save as image
              </span>
            </a>
            <a href="" id="blank"></a>
          </li>
          <li class="has-subnav">
            <button class="button">
              <i class="fa fa-download fa-2x  text-blue"></i>
              <span class="nav-text text-blue">
                Export PDF
              </span>
            </button>
          </li>
        </ul>
      </nav>
      <div class="col-sm-12 area follow-me bg-gainsboro" id="content">

        <div id="svgContainer" style="position:fixed">
          <svg height="" width="" id="svgconnect"><path id="lineAB" d="M 0 0 L 0 0" stroke="black" stroke-width="2" fill="none" /></svg>
        </div>
          <div class="draggable schema">
            <div contenteditable="true" class="text-center schema-header">
              Table Name
            </div>
            <div class="schema-body">
              <table id="table">
                <tr>
                  <td class="pl-2">
                    <div id="box1" style="top: 0px;left: 220px;position: fixed;">
                      <svg height="30" width="60" class="rotate-90" id="con1">
                        <line x1="30" y1="5" x2="30" y2="25" stroke="black" stroke-width="2" />
                        <line x1="45" y1="5" x2="45" y2="25" stroke="black" stroke-width="2" />
                        <line x1="5" y1="15" x2="60" y2="15" stroke="black" stroke-width="2" />
                      </svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="pl-2">
                    <span contenteditable="true">id</span>
                    <span>:</span>
                    <span>int</span>
                    <span>(</span>
                    <span contenteditable="true"></span>
                    <span>)</span>
                  </td>
                  <td style="position:absolute;right:0;" class="mr-2">
                    <button href="#" class="delete text-danger "><span class="oi oi-x"></span></button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="draggable schema">
            <div contenteditable="true" class="text-center schema-header">
              Table Name
            </div>
            <div class="schema-body">
              <div>
                <a href="#" id="username">superuser</a>
                <div id="user">
                  <div id="box2" style="top: 0px;left: -40px;position: fixed;">
                    <svg height="20" width="40" id="con2">
                      <line x1="0" y1="10" x2="5" y2="10" stroke="black" stroke-width="2" />
                      <circle cx="13" cy="10" r="7" stroke="black" stroke-width="2" fill="transparent" />
                      <line x1="20" y1="10" x2="40" y2="10" stroke="black" stroke-width="2" />
                      <line x1="25" y1="10" x2="40" y2="0" stroke="black" stroke-width="2" />
                      <line x1="25" y1="10" x2="40" y2="20" stroke="black" stroke-width="2" />
                    </svg>
                  </div>
                  <div class="graph"></div>
                  <!-- empty -->
                  <a href="#" data-name="username" data-type="text" class="editable-click editable-empty" data-value="" title="Username">Empty</a>
                  <!-- non-empty -->
                  <a href="#" data-name="group" data-type="select" data-source="/groups" data-value="1" class="editable-click" title="Group">Operator</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<style>

.rotate-90 {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

</style>
<style>
  #draggable, #draggable2 { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable, #droppable2 { width: 120px; height: 120px; padding: 0.5em; float: left; margin: 10px; }
  </style>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/js/jquery.html-svg-connect.js" type="text/javascript"></script>

<script> // SCRIPT FOR THE SAVE IMAGE
function saveScreen(){
  var caption = "sample";
  html2canvas(document.getElementById('content')).then(function(canvas){
    $('#blank').attr('download', caption + '.png');
    $('#blank').attr('href', canvas.toDataURL("image/png"));
    $('#blank')[0].click();
  });
};
</script>

<script>
$( document ).ready(function() {
  var cvheight = $("#content").height();
  var cvwidth = $("#content").width();
  var box1 = $("#box1").position();
  var box2 = $("#box2").position();
  var box1x = box1.left - 169.65625 - 20;
  var box1y = box1.top - 71+16.5;
  var box2x = box2.left - 169.65625 - 74;
  var box2y = box2.top - 71+11;
  var lx = box1x - box2y;
  $("#svgconnect").attr("height", cvheight);
  $("#svgconnect").attr("width", cvwidth);
  $("#lineAB").attr("d", "M "+box1x+" "+box1y+" L "+box2x+" "+box2y+"");
});
</script>

<!-- <script type="text/javascript">
jQuery(document).ready(function($) {
  $("#svgContainer").HTMLSVGconnect({
    strokeWidth: 2,
    paths: [
      { start: "#con2", end: "#con1", orientation: "vertical", offset: 50 }
    ]
  });
});
</script> -->

<script> // SCRIPT FOR THE DESIGNER (jsplumb)
jsPlumb.ready(function() {
  var firstInstance = jsPlumb.getInstance();
  firstInstance.importDefaults({
    Connector : [ "Bezier", { curviness: 150 } ],
    Anchors : [ "TopCenter", "BottomCenter" ]
  });

  firstInstance.connect({
    source:"element1",
    target:"element2",
    scope:"someScope"
  });
  jsPlumb.setId(el, newId)
});
</script>

<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);}
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
  font-size: 2em;
}
.fa {
  position: relative;
  display: table-cell;
  width: 60px;
  height: 36px;
  text-align: center;
  vertical-align: middle;
  font-size:20px;
}

.button {
  text-align: left;
  background:none!important;
  border:none;
  padding:0!important;
  cursor: pointer;
}

.main-menu:hover,nav.main-menu.expanded {
  width:250px;
  overflow:visible;
}

.main-menu {
  background:#fbfbfb;
  border-right:1px solid #e5e5e5;
  position:absolute;
  top:0;
  bottom:0;
  height:200px;
  left:0;
  width:60px;
  overflow:hidden;
  -webkit-transition:width .05s linear;
  transition:width .05s linear;
  -webkit-transform:translateZ(0) scale(1,1);
  z-index:1000;
}

.main-menu>ul {
  margin:7px 0;
}

.main-menu li {
  position:relative;
  display:block;
  width:250px;
}

.main-menu li>a {
  position:relative;
  display:table;
  border-collapse:collapse;
  border-spacing:0;
  color: rgb('66, 165,245');
  font-family: arial;
  font-size: 14px;
  text-decoration:none;
  -webkit-transform:translateZ(0) scale(1,1);
  -webkit-transition:all .1s linear;
  transition:all .1s linear;
}

.main-menu .nav-icon {
  position:relative;
  display:table-cell;
  width:60px;
  height:36px;
  text-align:center;
  vertical-align:middle;
  font-size:18px;
}

.main-menu .nav-text {
  position:relative;
  display:table-cell;
  vertical-align:middle;
  width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
  position:absolute;
  left:0;
  bottom:0;
}

.no-touch .scrollable.hover {
  overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
  overflow-y:auto;
  overflow:visible;
}

a:hover,a:focus {
  text-decoration:none;
}

nav {
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  -o-user-select:none;
  user-select:none;
}

nav ul,nav li {
  outline:0;
  margin:0;
  padding:0;
}

.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
  color:#fff;
  background-color:#5fa2db;
}

.area {
  height: -webkit-fill-available;
  width: 100%;
}

@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}

/*Draggable schema*/

.schema{
  width: 20%;
  height: 20%;
  min-height: 6.5em;
  margin: 10%;
  border: 1px solid #aaaaaa;
  background-color: #f5f5f5;
  -webkit-box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.61);
  -moz-box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.61);
  box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.61);
  -webkit-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.schema-header{
  width: 100%;
  background-color: #e6e3e6;
}

.schema-body{
  border-top: 1px solid #ccc6cc;
}
.drag{
  width: 30%;
  height: 40%;

  -webkit-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}
.drag-me::before {
  content: "#" attr(id);
  font-weight: bold;
}

.right {
  text-align: right;
}
</style>

<script src="/js/interact.min.js"></script>
<script>
interact('.draggable')
.draggable({
  // enable inertial throwing
  inertia: true,
  // keep the element within the area of it's parent
  restrict: {
    restriction: "parent",
    endOnly: true,
    elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
  },
  // enable autoScroll
  autoScroll: true,

  // call this function on every dragmove event
  onmove: dragMoveListener,
  // call this function on every dragend event
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
  var box1 = $("#box1").position();
  var box2 = $("#box2").position();
  var box1x = box1.left - 169.65625 - 20;
  var box1y = box1.top - 71+16.5;
  var box2x = box2.left - 169.65625 - 74;
  var box2y = box2.top - 71+11;
  var lx = box1x - box2y;
  $("#lineAB").attr("d", "M "+box1x+" "+box1y+" L "+box2x+" "+box2y+"");
}

// this is used later in the resizing and gesture demos
window.dragMoveListener = dragMoveListener;
</script>

<script>
interact('.resize-drag')
.draggable({
  onmove: window.dragMoveListener,
  restrict: {
    restriction: 'parent',
    elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
  },
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

</script>

<!-- x-editable (jquery-ui version) -->
<link href="/css/jqueryui-editable.css" rel="stylesheet"/>
<script src="/js/jqueryui-editable.min.js"></script>
<script src="http://code.jquery.com/jquery-5.0.3.min.js"></script>
<!-- main.js -->
<script>

$(document).ready(function() {
  //toggle `popup` / `inline` mode
  $.fn.editable.defaults.mode = 'popup';

  //make username editable
  $('#user').editable({
    selector: 'a',
    url: '/post',
    pk: 1
  });
});

</script>

@endsection
