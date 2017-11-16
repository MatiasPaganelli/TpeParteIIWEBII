  $(document).ready(function(){

            $(".detalleProductoAdmin").on("click", function(){
              let id_producto = this.id;
              $.ajax({
                "url" : "detalleProductoAdmin",
                "method" : "GET",
                "dataType" : "HTML",
                "success" : function(data) {

                  let templateComentario;

$.ajax({url: 'js/templates/comentarios.mst'}).done(template => templateComentario = template);
cargarComentarios(id_producto);

function createComentario(comentario){
     let rendered = Mustache.render(templateComentario, {comentarios:comentario});
     $('.contenedorComentario').append(rendered);
 }

function cargarComentarios(id_producto){
  alert(id_producto);

    $.ajax("api/comentariosproductos/"+id_producto)
    .done(function(comentarios) {
        $(".comentarios").remove();
        for (var key in comentarios) {
          console.log(comentarios);
            $('.contenedorComentario').append(createComentario(comentarios[key]));
        }
    })
    .fail(function() {
        $('.contenedorComentario').append('<div>Imposible cargar los comentarios</div>');
    });
}
//cargarComentarios();
//setInterval(cargarComentarios, 2000);

                }
              });
            });
          });
