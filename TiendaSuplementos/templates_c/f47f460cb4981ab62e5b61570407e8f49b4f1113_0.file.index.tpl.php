<?php
/* Smarty version 3.1.30, created on 2017-10-11 00:19:44
  from "C:\xampp\htdocs\web\1°AÑO-2°CUATRIMESTRE\WEB2\MVC\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd478061d4c5_42272625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47f460cb4981ab62e5b61570407e8f49b4f1113' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\1°AÑO-2°CUATRIMESTRE\\WEB2\\MVC\\templates\\index.tpl',
      1 => 1507673983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59dd478061d4c5_42272625 (Smarty_Internal_Template $_smarty_tpl) {
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
