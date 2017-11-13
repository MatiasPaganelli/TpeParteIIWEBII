<?php
/* Smarty version 3.1.30, created on 2017-11-13 22:17:02
  from "C:\xampp\htdocs\TPEWEBAjax\TpeParteIIWEBII\TiendaSuplementos\templates\Admin\crearUsuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a0bce5e0a67_03532142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd7260cddfe9e7d63e567678e0378f5c4aa35c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Admin\\crearUsuario.tpl',
      1 => 1510607821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0a0bce5e0a67_03532142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
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
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
