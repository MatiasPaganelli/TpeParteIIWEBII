<?php
/* Smarty version 3.1.30, created on 2017-11-15 19:32:09
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/User/comentarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0c88295e54a0_48055390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53db935997acc98f31a05862bc19f9c7e80f63d0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/User/comentarios.tpl',
      1 => 1510770475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0c88295e54a0_48055390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>COMENTARIOS:</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
        <?php if ($_smarty_tpl->tpl_vars['comentario']->value['id_producto'] == $_smarty_tpl->tpl_vars['producto']->value['id']) {?>
        <p>Producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['comentario']->value['descripcion'];?>
</p>
        <p>Puntaje: <?php echo $_smarty_tpl->tpl_vars['comentario']->value['calificacion'];?>
 / 5</p>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
