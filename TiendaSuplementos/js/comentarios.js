$(document).ready(function(){
$(".cargarComentario").on("click", function() {
  $.ajax({
             "url" : "comentarios",
             "method" : "GET",
             "dataType" : "HTML",
             "success" : function(data) {
                 $(".cargarComentario").on("click", function(){
                     let fk_id_producto = this.id;
                     $.ajax({
                         "url" : "cargarComentario",
                         "method" : "GET",
                         "dataType" : "HTML",
                         "success" : function(data) {

});
});
  let templateComentarios;
  $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentarios = template);
   function crearComentario(comentario) {
               let rendered = Mustache.render(templateComentarios ,{comentarios : comentarios});
               $('.coemntario').append(rendered);
             }
     function guardarComentario(comentario) {
         $.ajax({
             "method": "POST",
             "data": comentario,
             "url": "api/comentarios"
           })
         .done(function(comentario) {
           console.log(comentario);
           crearComentario(comentario);
         })
         .fail(function() {
           alert("Error al guardar comentario");
         });
       }

  //
  //      function getFormData($form){
  //          let unindexed_array = $form.serializeArray();
  //          let indexed_array = {};
  //          $.map(unindexed_array, function(n, i){
  //              indexed_array[n['name']] = n['value'];
  //          });
  //          return indexed_array;
  //      }
  //
  //      $(".comentar").submit(function(event){
  //          event.preventDefault();
  //          formData = JSON.stringify(getFormData($(this)));
  //          guardarComentario(formData);
  //      });
  //
  //      function cargarComentarios(){
  //          $.ajax("api/comentarios/"+fk_id_producto)
  //          .done(function(comentarios) {
  //              for (var key in comentarios) {
  //                  $('.comentariousuario').append(crearComentario(comentarios[key]));
  //              }
  //          })
  //          .fail(function() {
  //              $('.comentariousuario').append('<td>Imposible cargar los comentarios</td>');
  //          });
  //      }
  //      cargarComentarios();
  //  }
  //





   //
   //
   //
  //    $.ajax({
  //      "method":"POST",
  //      "url":"api/comentarios",
  //      "data":JSON.stringify(comentario),
  //      "success": function(comentario) {
  //        cargarComentarios();
  //      },
  //      "error" : function() {
  //        alert("Imposible publicar comentario");
  //      }
  //    });
  //  }
