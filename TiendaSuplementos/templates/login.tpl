{include file="headerVisit.tpl"}
<div class="container">
<div class="container col-md-6 col-md-offset-3">
  <form action="verificarUsuario" method="post">
    <div class="form-group ">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresa email" required>
      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su email (ni su contraseña).</small>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña" required>
    </div>
    {if !empty($error)}
    <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
  </div>
  </div>
{include file="footer.tpl"}
