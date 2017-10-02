
/*
    This javascript file is for the side navigation bar, to add an active class
*/

var home = document.getElementById('homeContent');
var stud = document.getElementById('studContent');
var quiz = document.getElementById('quizContent');
var upload = document.getElementById('upContent');

if (home !== null){
    $(".a").find(".active").removeClass("active");
    $('#admin').addClass("active");
}
if (stud !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminStud').addClass("active");
}
if (quiz !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminQuiz').addClass("active");
}
if (upload !== null){
    $(".a").find(".active").removeClass("active");
    $('#adminUpload').addClass("active");
}
