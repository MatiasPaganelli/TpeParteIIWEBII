<?php
/* Smarty version 3.1.30, created on 2017-11-15 23:14:51
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/detalleProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0cbc5bd69e71_30072555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281ae868563e48144bf0620bf9c489226eba9ff8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/detalleProducto.tpl',
      1 => 1510784059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footerAdmin.tpl' => 1,
  ),
),false)) {
function content_5a0cbc5bd69e71_30072555 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/libs/plugins/function.html_image.php';
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> Detalle de Producto </h2>
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
        <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>
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

<div class="contenedorComentario">

</div>
<h2>DEJA TU COMENTARIO:</h2>
<form  action="enviarComentario" class="form-horizontal col-sm-6 col-md-6 col-lg-6">
  <div class="form-group">
    <label for="producto" class="col-sm-2 control-label">Producto:</label>
    <div class="col-sm-10">
      <input class="form-control" id="producto" placeholder="Whey Protein">
    </div>
  </div>
  <div class="form-group">
    <label for="comentario" class="col-sm-2 control-label">Comentario:</label>
    <div class="col-sm-10">
      <textarea id="comentario" class="form-control" rows="3"  placeholder="Este producto es de muy buena calidad"></textarea>
    </div>
    <div class="form-group">
      <label for="comentario" class="col-sm-2 control-label">Calificacion:</label>
      <div class="col-sm-10">
        <input id="calificacion" class="form-control" rows="3"  placeholder="5"></input>
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
