<?php
/* Smarty version 3.1.30, created on 2017-11-13 22:11:57
  from "C:\xampp\htdocs\TPEWEBAjax\TpeParteIIWEBII\TiendaSuplementos\templates\Admin\crearCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a0a9d1ba217_82337429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17bb0139641930c41809fd45e19ad57fbeab294e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Admin\\crearCategoria.tpl',
      1 => 1510349487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0a0a9d1ba217_82337429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
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
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
