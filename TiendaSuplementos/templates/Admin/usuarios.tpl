{include file="headerVisit.tpl"}
{foreach from=$usuarios item=usuario}
<div class="row well">
  <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="caption">
        <p>Email:{$usuario['email']} </p>
        <p>Tipo de Usuario:{$usuario['tipo_usuario']}</p>
        {if $usuario['tipo_usuario'] != 'administrador'}
        <a href="borrarUsuario/{$usuario['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <form action="cambiarPermiso" method="POST">
          <select name="cambiarPermiso" class="form-control filter">
            <option value="" selected disabled hidden>Tipo de usuarios</option>
            {foreach from=$usuarios item=usuario}
            <option value="{$usuario['tipo_usuario']}">{$usuario['tipo_usuario']}</option>
            {/foreach}
          </select>
          <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Cambiar</button>
        </form>
        {/if}
      </div>
    </div>
  </div>
  {/foreach}

{include file="footer.tpl"}
