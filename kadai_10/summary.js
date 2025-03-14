$(document).ready(function () {
  $("#change-color").click(function () {
    $("#target").css("color", "red");
  });


  $("#change-text").click(function () {
    $("#target").css("color", "red").text("Hello!");
  });

  $("#fade-out").click(function(){
    $("#target").fadeOut();
  });

  $("#fade-in").click(function(){
    $("#target").fadeIn().css("color","red").text("Hello!");
  });



});