$(document).ready(function(){

  let templateComentarios;
  $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentarios = template);
   function cargarComentarios() {
         $.ajax("api/comentarios")
             .done(function(comentarios) {
               $('p').remove();
               let rendered = Mustache.render(templateComentarios ,{comentarios : comentarios});
               $('#listaComentarios').append(rendered);
             })
             .fail(function() {
                 $('#listaComentarios').append('<p>Imposible cargar la lista de comentarios</p>');
             });
     }


   cargarComentarios();
   function guardarComentario(){
     let producto ={
       // "categoria": $('#id_categoria').val(),
       // "nombre": $('#nombre').val(),
       // "precio": $('#precio').val(),
       // "peso": $('#peso').val()
     };
     $.ajax({
       "method":"POST",
       "url":"api/comentarios",
       "data":JSON.stringify(comentario),
       "success": function(comentario) {
         cargarComentarios();
       },
       "error" : function() {
         alert("Imposible publicar comentario");
       }
     });
   }







});
