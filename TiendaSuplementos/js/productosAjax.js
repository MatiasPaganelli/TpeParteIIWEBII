$(document).ready(function(){
  let templateProductos;
  $.ajax({ url: 'js/templates/productos.mst'}).done( template => templateProductos = template);
   function cargarProductos() {
         $.ajax("api/productos")
             .done(function(productos) {
               $('p').remove();
               let rendered = Mustache.render(templateProductos ,{productos : productos});
               $('#listaProductos').append(rendered);
             })
             .fail(function() {
                 $('#listaProductos').append('<p>Imposible cargar la lista de productos</p>');
             });
     }

   // $('#refresh').click(function(event){
   //     event.preventDefault();
   //     cargarProductos();
   // })
   // cargarProductos();
   function guardarProducto(){
     let producto ={
       "categoria": $('#id_categoria').val(),
       "nombre": $('#nombre').val(),
       "precio": $('#precio').val(),
       "peso": $('#peso').val()
     };

     $.ajax({
       "url":"api/productos",
       "method":"POST",
       "dataType":"JSON.stringify(productos)",
       "success": function(data) {
         cargarProductos();
       }
     });
   }
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
   $("#btnCrearProducto").on("click",function(event){
     event.preventDefault();
     guardarProducto();
 });
//  $(".js-borrar").on("click",function(event){
//    event.preventDefault();
//    let id = $(this).data('id');
//    borrarProducto(id);
// });
  });
