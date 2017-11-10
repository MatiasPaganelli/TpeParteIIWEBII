<?php
/* Smarty version 3.1.30, created on 2017-10-24 01:19:34
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\Visit\categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee79065862e2_21832111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f0e064e98b4330191c868715d31b285e44732d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\Visit\\categorias.tpl',
      1 => 1507937588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59ee79065862e2_21832111 (Smarty_Internal_Template $_smarty_tpl) {
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
