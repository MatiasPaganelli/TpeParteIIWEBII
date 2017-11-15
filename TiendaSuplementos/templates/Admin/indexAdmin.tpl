  {include file="headerAdmin.tpl"}
  <h1>Lista de Productos:</h1>
  <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
 </button>
  {foreach from=$productos item=producto}
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        {html_image file = "{$producto['images']}"}
        <div class="caption">
          <h3>{$producto['nombre']} </h3>
          <p>{$producto['descripcion']}</p>
          <p>Categoria: {$producto['id_categoria']}</p>
          <p>{$producto['nombre']}</p>
          <p>Precio:{$producto['precio']}</p>
          <p>Peso: {$producto['peso']}</p>
          <a href="borrarProducto/{$producto['id']}"><span class="glyphicon glyphicon-trash data"aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
    {/foreach}
    {include file="footer.tpl"}
