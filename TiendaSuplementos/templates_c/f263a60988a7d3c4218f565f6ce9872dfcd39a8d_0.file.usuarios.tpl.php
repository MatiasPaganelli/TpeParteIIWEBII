<?php
/* Smarty version 3.1.30, created on 2017-11-14 23:57:16
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/usuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0b74ccaae0b8_37977569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f263a60988a7d3c4218f565f6ce9872dfcd39a8d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Admin/usuarios.tpl',
      1 => 1510611246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0b74ccaae0b8_37977569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
<div class="row well">
  <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="caption">
        <p>Email:<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
 </p>
        <p>Tipo de Usuario:<?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'] != 'administrador') {?>
        <a href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <form action="cambiarPermiso" method="POST">
          <select name="cambiarPermiso" class="form-control filter">
            <option value="" selected disabled hidden>Tipo de usuarios</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
          <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Cambiar</button>
        </form>
        <?php }?>
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
