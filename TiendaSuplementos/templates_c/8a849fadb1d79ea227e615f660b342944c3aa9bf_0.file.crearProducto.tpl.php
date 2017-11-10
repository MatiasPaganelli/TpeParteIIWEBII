<?php
/* Smarty version 3.1.30, created on 2017-10-12 02:12:18
  from "C:\xampp\htdocs\web\WEB2\TiendaSuplementos\templates\Admin\crearProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59deb362337c94_92652307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a849fadb1d79ea227e615f660b342944c3aa9bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\TiendaSuplementos\\templates\\Admin\\crearProducto.tpl',
      1 => 1507767136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59deb362337c94_92652307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <form action="guardarProducto" method="post">
        <div class="form-group">
          <label for="nombre">Categoria</label>
          <input type="text" class="form-control" id="id_categoria" name="id_categoria"  placeholder="Numero de la categoria (1=Proteina 2=Pre entreno 3=Ganador de peso 4=Creatina)">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio del producto">
        </div>
        <label for="peso">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso del producto">
      </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </form>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
