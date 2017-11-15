<?php
/* Smarty version 3.1.30, created on 2017-11-14 23:54:26
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/inicioAjax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0b742262f8d4_01590866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6beb30c7ab08bae456bb720e3f9af759521ad5e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/inicioAjax.tpl',
      1 => 1510430174,
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
function content_5a0b742262f8d4_01590866 (Smarty_Internal_Template $_smarty_tpl) {
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
