<?php
/* Smarty version 3.1.30, created on 2017-11-12 22:34:47
  from "C:\xampp\htdocs\TPWebIIE2Carlos\TpeParteIIWEBII\TiendaSuplementos\templates\Admin\crearProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08be77bb51b7_52755031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a83e29ee9d6dd9727750d7885ade79db8bd9771' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWebIIE2Carlos\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Admin\\crearProducto.tpl',
      1 => 1510522485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a08be77bb51b7_52755031 (Smarty_Internal_Template $_smarty_tpl) {
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
        <button id="btnCrearProducto" type="submit" class="btn btn-default">Crear</button>
      </form>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
