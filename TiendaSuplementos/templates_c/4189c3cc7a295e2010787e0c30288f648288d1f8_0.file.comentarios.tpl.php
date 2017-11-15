<?php
/* Smarty version 3.1.30, created on 2017-11-15 00:52:33
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/comentarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0b81c1553857_03226099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4189c3cc7a295e2010787e0c30288f648288d1f8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/comentarios.tpl',
      1 => 1510703476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0b81c1553857_03226099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>COMENTARIOS:</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <div class="caption">
        <p>INFO</p>
      </div>
    </div>
  </div>
</div>
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
  <div class="cargarComentario form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class=" btn btn-default">Enviar</button>
    </div>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
