$(document).ready(function(){

   function crearProducto(producto){
      var element = '<p id="producto' + producto.id;
      element += '<p>producto.nombre + ':' + producto.descripcion </p>';
      element += '<a href="borrarProducto/' + producto.id + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
      element += '</p>';
      return element;
    }

   function cargarTareas() {
         $.ajax("api/productos")
             .done(function(producto) {
               //console.log(tareas);
               $('p').remove();
               for (var key in producto) {
                 $('#listaTareas').append(crearProducto(producto[key]));
               }

             })
             .fail(function() {
                 $('#listaProductos').append('<li>Imposible cargar la lista de productos</li>');
             });
     }

   $('#refresh').click(function(event){
       event.preventDefault();
       cargarTareas();
   })
   cargarTareas();
  });
