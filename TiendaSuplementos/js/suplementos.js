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
  // $("#refresh").on("click",function cargarProductos(){
  //   function crearProducto(producto){
  //    var element = '<li id="producto' + producto.id + '"class="list-group-item">'
  //     element += producto.nombre;
  //    element += '<a href="borrarProducto/' + producto.id + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
  //    element += '</li>';
  //    return element;
  //  }
  //
  //   $.ajax("api/productos")
  //        .done(function(productos) {
  //            $('.caption h3 p').remove();
  //            for (producto of productos) {
  //              $('#listaProductos').append(createProductos(productos));
  //            }
  //         })
  //        .fail(function() {
  //            $('#listaProductos').append('<li>Imposible cargar la lista de productos</li>');
  //        });
  //
  // });

})
