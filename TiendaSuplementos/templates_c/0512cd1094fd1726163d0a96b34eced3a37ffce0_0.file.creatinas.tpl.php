<?php
/* Smarty version 3.1.30, created on 2017-11-09 22:29:43
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/Visit/creatinas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04c8c779f4d5_64021028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0512cd1094fd1726163d0a96b34eced3a37ffce0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/Visit/creatinas.tpl',
      1 => 1510262888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04c8c779f4d5_64021028 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/libs/plugins/function.html_image.php';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
if ($_smarty_tpl->tpl_vars['producto']->value['id_categoria'] == 2) {?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
        <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</p>
        <p>Precio:<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
        <p>Peso: <?php echo $_smarty_tpl->tpl_vars['producto']->value['peso'];?>
</p>
      </div>
    </div>
  </div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
<?php }
}
