{include file="headerAdmin.tpl"}
<h2> Detalle de Producto </h2>
{foreach from=$productos item=producto}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
     {html_image file = "{$producto['images']}"}
        <h3>{$producto['nombre']} </h3>
        <p>{$producto['descripcion']}</p>
        <p>Categoria: {$producto['nombre_categoria']}</p>
        <p>{$producto['nombre']}</p>
        <p>Precio:{$producto['precio']}</p>
        <p>Peso: {$producto['peso']}</p>
      </div>
    </div>
  </div>
</div>

{/foreach}
<div class="contenedorComentario">

</div>
<h2>DEJA TU COMENTARIO:</h2>
<form  action="enviarComentario" class="form-horizontal col-sm-6 col-md-6 col-lg-6">
  <div class="form-group">
    <label for="producto" class="col-sm-2 control-label">Producto:</label>
    <div class="col-sm-10">
      <input class="form-control" id="producto" placeholder="Whey Protein">
    </div>
  </div>
  <div class="form-group">
    <label for="comentario" class="col-sm-2 control-label">Comentario:</label>
    <div class="col-sm-10">
      <textarea id="comentario" class="form-control" rows="3"  placeholder="Este producto es de muy buena calidad"></textarea>
    </div>
    <div class="form-group">
      <label for="comentario" class="col-sm-2 control-label">Calificacion:</label>
      <div class="col-sm-10">
        <input id="calificacion" class="form-control" rows="3"  placeholder="5"></input>
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>
{include file="footerAdmin.tpl"}
