{include file="headerUser.tpl"}
{foreach from=$productos item=producto}
{if $producto['id_categoria'] == $categoriaFiltrada}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      {html_image file = "{$producto['images']}"}
      <div class="caption">
        <h3>{$producto['nombre']} </h3>
        <p>{$producto['descripcion']}</p>
        <p>Precio:{$producto['precio']}</p>
        <p>Peso: {$producto['peso']}</p>
      </div>
    </div>
  </div>
  {/if}
  {/foreach}
  {include file="footer.tpl"}
