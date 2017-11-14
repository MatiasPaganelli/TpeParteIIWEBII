{include file="headerAdmin.tpl"}
<h1>COMENTARIOS:</h1>
{foreach from=$comentarios item=comentario}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
        <p>INFO</p>
      </div>
    </div>
  </div>
</div>
{/foreach}
<h2>DEJA TU COMENTARIO:</h2>
<form class="form-horizontal col-sm-6 col-md-6 col-lg-6">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Producto:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Comentario:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
{include file="footer.tpl"}
