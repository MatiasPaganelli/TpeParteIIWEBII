<?php
/* Smarty version 3.1.30, created on 2017-11-15 21:37:36
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/indexAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0ca590bce216_78721981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa17f2a0c495e94537e7058015cdf062e1fafc24' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/indexAdmin.tpl',
      1 => 1510778255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0ca590bce216_78721981 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/libs/plugins/function.html_image.php';
?>
  <?php $_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1>Lista de Productos:</h1>
 </button>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <a class="detalleProductoAdmin" id="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
" href="detalleProductoAdmin/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>
</a>
        <div class="caption">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
          <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-trash data"aria-hidden="true"></span></a>
        </div>
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
