<?php
/* Smarty version 3.1.30, created on 2017-11-13 14:55:43
  from "C:\xampp\htdocs\TPEWEBAjax\TpeParteIIWEBII\TiendaSuplementos\templates\Visit\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a09a45fc932c5_47811779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a4eea4017c02737afaa9e6a581a4ace231748b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Visit\\index.tpl',
      1 => 1510492693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a09a45fc932c5_47811779 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
?>

<h1>Lista de Productos:</h1>
<button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
 </button>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <div class="caption">
          <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

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
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
