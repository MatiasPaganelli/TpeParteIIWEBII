<?php
/* Smarty version 3.1.30, created on 2017-11-16 03:45:14
  from "C:\xampp\htdocs\TPWebIIE2\TpeParteIIWEBII\TiendaSuplementos\templates\Admin\categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0cfbba6561e4_27790158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484656ba084b85082eef1090794d44198fc59918' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWebIIE2\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Admin\\categorias.tpl',
      1 => 1510800161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0cfbba6561e4_27790158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Categorias :</h1>
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
        <a href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
