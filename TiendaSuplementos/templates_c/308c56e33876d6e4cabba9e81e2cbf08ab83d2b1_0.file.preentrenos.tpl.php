<?php
/* Smarty version 3.1.30, created on 2017-10-24 01:19:34
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\Visit\preentrenos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee79060381f8_40324795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308c56e33876d6e4cabba9e81e2cbf08ab83d2b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\Visit\\preentrenos.tpl',
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
function content_59ee79060381f8_40324795 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Pre Entrenos:</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
if ($_smarty_tpl->tpl_vars['producto']->value['id_categoria'] == 3) {?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
