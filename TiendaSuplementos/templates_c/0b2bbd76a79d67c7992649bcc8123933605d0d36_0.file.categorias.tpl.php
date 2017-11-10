<?php
/* Smarty version 3.1.30, created on 2017-10-12 14:09:47
  from "C:\xampp\htdocs\web\WEB2\TiendaSuplementos\templates\Visit\categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df5b8b38f445_44438936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2bbd76a79d67c7992649bcc8123933605d0d36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\TiendaSuplementos\\templates\\Visit\\categorias.tpl',
      1 => 1507810159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59df5b8b38f445_44438936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Lista de Categorias:</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['categoria']->value['descripcion'];?>
</p>
      </div>
    </div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
