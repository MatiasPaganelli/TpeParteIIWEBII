<?php
/* Smarty version 3.1.30, created on 2017-11-09 22:29:38
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/inicioAjax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04c8c2e02637_65593384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808d5c09e3468b1a7caa6469331cc67afc16ad47' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/inicioAjax.tpl',
      1 => 1510262977,
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
function content_5a04c8c2e02637_65593384 (Smarty_Internal_Template $_smarty_tpl) {
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
