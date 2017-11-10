{include file="headerAdmin.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {if isset($error)}
      <div class="alert alert-danger" role="alert">{$error}</div>
      {/if}
      <form action="guardarProducto" method="post">
        <div class="form-group">
          <label for="nombre">Categoria</label>
          <input type="text" class="form-control" id="id_categoria" name="id_categoria"  placeholder="Numero de la categoria (1=Proteina 2=Pre entreno 3=Ganador de peso 4=Creatina)">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio del producto">
        </div>
        <label for="peso">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso del producto">
      </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </form>
    </div>
  </div>
</div>

{include file="footer.tpl"}
