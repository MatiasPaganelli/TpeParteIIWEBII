$(document).ready(function(){
  "use strict";
 // event.preventDefault();
  $(".proteinas").on("click",function(){
    $.ajax({
      "url":"proteinas",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".ganadores").on("click",function(){
    $.ajax({
      "url":"ganadores",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".preentrenos").on("click",function(){
    $.ajax({
      "url":"preentrenos",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".creatinas").on("click",function(){
    $.ajax({
      "url":"creatinas",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".login").on("click",function(){
    $.ajax({
      "url":"login",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".index").on("click",function(){
    $.ajax({
      "url":"index",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $(".indexAdmin").on("click",function(){
    $.ajax({
      "url":"indexAdmin",
      "method":"GET",
      "dataType":"HTML",
      "success": function(data) {
        $(".container").html(data);
      }
    });
  });
  $("#refresh").on("click",function(){
    alert("Refresco");
    // $.ajax({
    //   "url":"indexAdmin",
    //   "method":"GET",
    //   "dataType":"HTML",
    //   "success": function(data) {
    //     $(".container").html(data);
    //   }
    // });
  });
})
