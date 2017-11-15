$(document).ready(function(){
  // let templateProductos;
  // $.ajax({ url: 'js/templates/productos.mst'}).done( template => templateProductos = template);
  //  function cargarProductos() {
  //        $.ajax("api/productos")
  //            .done(function(productos) {
  //              $('p').remove();
  //              let rendered = Mustache.render(templateProductos ,{productos : productos});
  //              $('#listaProductos').append(rendered);
  //            })
  //            .fail(function() {
  //                $('#listaProductos').append('<p>Imposible cargar la lista de productos</p>');
  //            });
  //    }


   // cargarProductos();
   // function guardarProducto(){
   //   let producto ={
   //     // "categoria": $('#id_categoria').val(),
   //     // "nombre": $('#nombre').val(),
   //     // "precio": $('#precio').val(),
   //     // "peso": $('#peso').val()
   //     "categoria": "1",
   //     "nombre": "Whey Ajax",
   //     "precio" : "100",
   //     "peso" : "100"
   //   };
   //   $.ajax({
   //     "method":"POST",
   //     "url":"api/productos",
   //     "data":JSON.stringify(producto),
   //     "success": function(producto) {
   //       cargarProductos();
   //     },
   //     "error" : function() {
   //       alert("Imposible crear producto");
   //     }
   //   });
   // }
//    function borrarProducto(id) {
// $.ajax({
//       method: "DELETE",
//       url: "api/producto/" + id
//     })
//   .done(function() {
//      $('#producto'+id).remove();
//   })
//   .fail(function() {
//       alert('Imposible borrar el producto');
//   });
// }
 //   $("#btnCrearProducto").on("click",function(event){
 //     event.preventDefault();
 //     guardarProducto();
 // });
  });
