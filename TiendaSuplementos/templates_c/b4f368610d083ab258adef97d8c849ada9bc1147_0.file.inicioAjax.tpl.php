<?php
/* Smarty version 3.1.30, created on 2017-11-11 02:39:26
  from "C:\xampp\htdocs\TPEWEBAjax\TpeParteIIWEBII\TiendaSuplementos\templates\inicioAjax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0654ce1d2e07_09961882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f368610d083ab258adef97d8c849ada9bc1147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\inicioAjax.tpl',
      1 => 1510364219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:templates/Visit/productos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0654ce1d2e07_09961882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
  <?php $_smarty_tpl->_subTemplateRender("file:templates/Visit/productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!-- /.container -->


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
