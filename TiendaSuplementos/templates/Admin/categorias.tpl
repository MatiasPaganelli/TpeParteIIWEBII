{include file="headerAdmin.tpl"}
<h1>Lista de Categorias:</h1>
{foreach from=$categorias item=categoria}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
        <h3>{$categoria['nombre']} </h3>
        <p>{$categoria['descripcion']}</p>
        <a href="borrarCategoria/{$categoria['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      </div>
    </div>
  </div>
  {/foreach}
{include file="footer.tpl"}
