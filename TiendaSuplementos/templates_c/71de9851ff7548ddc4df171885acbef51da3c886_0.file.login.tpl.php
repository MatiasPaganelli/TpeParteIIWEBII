<?php
/* Smarty version 3.1.30, created on 2017-10-11 22:16:56
  from "C:\xampp\htdocs\web\WEB2\MVC-Visita\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de7c385d4f52_24403548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71de9851ff7548ddc4df171885acbef51da3c886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\MVC-Visita\\templates\\login.tpl',
      1 => 1507753015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59de7c385d4f52_24403548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
  </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
