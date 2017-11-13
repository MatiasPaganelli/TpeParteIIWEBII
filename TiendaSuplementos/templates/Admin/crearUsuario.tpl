{include file="headerAdmin.tpl"}
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       {if isset($error)}
      <div class="alert alert-danger" role="alert">{$error}</div>
      {/if}
      <form action="storeUsuario" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="juan@carlos.com">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="*****">
        </div>
        <div class="form-group">
          <label for="tipo_usuario">Tipo de usuario</label>
          <input type="text" class="form-control" id="tipo_usuario" name="tipo_usuario" placeholder="Tipo de usuario">
        </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </div>
      </form>
    </div>
    {include file="footer.tpl"}
