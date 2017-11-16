{include file="headerUser.tpl"}
{foreach from=$productos item=producto}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <a href="detalleProductoUser/{$producto['id']}">{html_image file = "{$producto['images']}"}</a>
      <h3>{$producto['nombre']} </h3>
      </div>
    </div>
  </div>
  {/foreach}
{include file="footer.tpl"}
