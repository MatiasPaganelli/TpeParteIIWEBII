<?php
/* Smarty version 3.1.30, created on 2017-10-12 00:51:58
  from "C:\xampp\htdocs\web\WEB2\TiendaSuplementos\templates\productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dea08e701241_50898284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b33113e1ca752d35f2d179b1b02b6b7f39c0068' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\TiendaSuplementos\\templates\\productos.tpl',
      1 => 1507664046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dea08e701241_50898284 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\web\\WEB2\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
?>
  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <a href="agregarProducto">Agregar Producto</a>
  <a href="categorias">Lista de Categorias</a>

  <h1>Lista de Productos:</h1>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="thumbnail">
        <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

        <div class="caption">
          <h3>      <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
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
          <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
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
