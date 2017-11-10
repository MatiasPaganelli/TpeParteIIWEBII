{include file="headerAdmin.tpl"}
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       {if isset($error)}
      <div class="alert alert-danger" role="alert">{$error}</div>
      {/if}
      <form action="guardarCategoria" method="post">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion del producto">
        </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </div>
      </form>
    </div>
    {include file="footer.tpl"}
