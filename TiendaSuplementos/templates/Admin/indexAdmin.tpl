  {include file="headerAdmin.tpl"}
  <h1>Lista de Productos:</h1>
 </button>
  {foreach from=$productos item=producto}
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <a class="detalleProductoAdmin" id="{$producto['id']}" href="detalleProductoAdmin/{$producto['id']}">{html_image file = "{$producto['images']}"}</a>
        <div class="caption">
          <h3>{$producto['nombre']} </h3>
          <a href="borrarProducto/{$producto['id']}"><span class="glyphicon glyphicon-trash data"aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
      </div>
    {/foreach}
    {include file="footer.tpl"}
