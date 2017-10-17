
/*
    This javascript file is for the side navigation bar, to add an active class
*/

var home = document.getElementById('homeContent');
var stud = document.getElementById('studContent');
var createClass= document.getElementById('createClassContent');
var search= document.getElementById('searchContent');
var progress= document.getElementById('progressContent');
var viewdb= document.getElementById('viewdbContent');
var quiz = document.getElementById('quizContent');
var viewquiz = document.getElementById('viewQuizContent');
var createquiz = document.getElementById('createQuizContent');
var editquiz = document.getElementById('editQuizContent');
var upload = document.getElementById('upContent');
/*
    These variables are getting the ID of every page
*/


if (home !== null){
    $(".a").find(".active").removeClass("active");  //  Find all <a> tags with the active class, and then remove the said class
    $('#adminpill').addClass("active");             //  Add an active class to the ID of the nav item
    $('#studentSub').addClass("d-none");            //  !!!(FOR SUB-MENUS)!!! Add a d-none (display:none) class to the div of subclass
    $('#quizSub').addClass("d-none");               //  Same as above...
}

if (stud !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminStudpill').addClass("active");
    $('#studentSub').addClass("d-none");
    $('#quizSub').addClass("d-none");
}

if (createClass !== null){
  $(".a").find(".active").removeClass("active");    //  Find all <a> tags with the active class, and then remove the said class
  $('#adminCreateClasspill').addClass("active");    //  Add an active class to the ID of the nav item
  $('#quizSub').addClass("d-none");                 //  !!!(FOR SUB-MENUS)!!! Add a d-none (display:none) class to the div of subclass
}

if (progress !== null){
  $(".a").find(".active").removeClass("active");
  $('#adminViewProgresspill').addClass("active");
  $('#quizSub').addClass("d-none");
}

if (viewdb !== null){
  $(".a").find(".active").removeClass("active");
  $('#adminViewDBpill').addClass("active");
  $('#quizSub').addClass("d-none");
}

if (quiz !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminQuizpill').addClass("active");
    $('#studentSub').addClass("d-none");
    $('#quizSub').addClass("d-none");
}

if (viewquiz !== null){
  $(".a").find(".active").removeClass("active");
  $('#viewQuizpill').addClass("active");
  $('#studentSub').addClass("d-none");
}

if (createquiz !== null){
  $(".a").find(".active").removeClass("active");
  $('#createQuizpill').addClass("active");
  $('#studentSub').addClass("d-none");
}

if (editquiz !== null){
  $(".a").find(".active").removeClass("active");
  $('#editQuizpill').addClass("active");
  $('#studentSub').addClass("d-none");
}

if (upload !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminUploadpill').addClass("active");
    $('#studentSub').addClass("d-none");
    $('#quizSub').addClass("d-none");
}

function sidenavfunc() {
  if($(window).width() <=575){
    $('#sidenavbar').addClass("collapse");        //  If the window is less than or equal to 575 pixels, add the collapse class or hide the navbar
  }
  else
    $('#sidenavbar').removeClass("collapse");     //  If the window is less than or equal to 575 pixels, remove the collapse class or unhide the navbar
}

$(document).ready(sidenavfunc);
$(window).resize(sidenavfunc);
