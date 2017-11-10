<?php
/* Smarty version 3.1.30, created on 2017-11-08 15:34:36
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\Admin\productosFiltradosAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0315fc1cc922_00543809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8872304e7b72ccfaee3f6fd952745de157fe996c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\Admin\\productosFiltradosAdmin.tpl',
      1 => 1510151621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0315fc1cc922_00543809 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'] == $_smarty_tpl->tpl_vars['categoriaFiltrada']->value) {?>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="thumbnail">
          <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          <div class="caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
            <p>Precio:<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
            <p>Peso: <?php echo $_smarty_tpl->tpl_vars['producto']->value['peso'];?>
</p>
            <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
