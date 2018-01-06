
/*
    This javascript file is for the side navigation bar, to add an active class
*/

var studentHome = document.getElementById('studentHomeContent');
var studentProfile = document.getElementById('studentProfileContent');
var studentLessons = document.getElementById('studentLessonContent');
var studentSimulator = document.getElementById('studentSimContent');
var studentDesigner = document.getElementById('studentDesContent');

/*
    These variables are getting the ID of every page on the Professor's Side
*/

if (studentHome !== null){
    $(".a").find(".active").removeClass("active");  //  Find all <a> tags with the active class, and then remove the said class
    $('#studentpill').addClass("active");             //  Add an active class to the ID of the nav item
    // $('#profilesub').addClass("d-none");            //  !!!(FOR SUB-MENUS)!!! Add a d-none (display:none) class to the div of subclass
}

else if (studentProfile !== null){
    $(".a").find(".active").removeClass("active");
    $('#studentprofilepill').addClass("active");
    // $('#profilesub').addClass("d-block");
}

else if (studentLessons !== null) {
    $(".a").find(".active").removeClass("active");
    $('#studentlessonpill').addClass("active");
    // $('#profilesub').addClass("d-none");
}

else if (studentSimulator !== null) {
    $(".a").find(".active").removeClass("active");
    $('#studentsimpill').addClass("active");
    // $('#profilesub').addClass("d-none");
}

else if (studentDesigner !== null) {
    $(".a").find(".active").removeClass("active");
    $('#studentdespill').addClass("active");
    // $('#profilesub').addClass("d-none");
}
//
// else if (createClass !== null){
//   $(".a").find(".active").removeClass("active");    //  Find all <a> tags with the active class, and then remove the said class
//   $('#profCreateClasspill').addClass("active");    //  Add an active class to the ID of the nav item
//   $('#quizSub').addClass("d-none");                 //  !!!(FOR SUB-MENUS)!!! Add a d-none (display:none) class to the div of subclass
// }

else {
  $(".a").find(".active").removeClass("active");
  $('#studentpill').addClass("active");
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
