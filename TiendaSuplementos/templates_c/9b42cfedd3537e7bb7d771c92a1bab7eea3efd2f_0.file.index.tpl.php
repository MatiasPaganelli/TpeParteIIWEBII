<?php
/* Smarty version 3.1.30, created on 2017-10-11 18:18:54
  from "C:\xampp\htdocs\web\WEB2\MVC-Visita\templates\Categorias\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de446e3bbe70_94677488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b42cfedd3537e7bb7d771c92a1bab7eea3efd2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\MVC-Visita\\templates\\Categorias\\index.tpl',
      1 => 1507738733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59de446e3bbe70_94677488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-6 col-md-offset-3">
    <h1>Lista de Categorias</h1>
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <li class="list-group-item">
       <?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
 : <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 : <?php echo $_smarty_tpl->tpl_vars['categoria']->value['descripcion'];?>

    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
