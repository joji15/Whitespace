
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

if (home !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminpill').addClass("active");
    $('#studentSub').addClass("d-none");
    $('#quizSub').addClass("d-none");
}

if (stud !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminStudpill').addClass("active");
    $('#studentSub').addClass("d-none");
    $('#quizSub').addClass("d-none");
}

if (createClass !== null){
  $(".a").find(".active").removeClass("active");
  $('#adminCreateClasspill').addClass("active");
  $('#quizSub').addClass("d-none");
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

$( window ).resize(function() {
  if($(window).width() <=575){
    $('#sidenavbar').addClass("collapse");
  }
  else
    $('#sidenavbar').removeClass("collapse");
});
