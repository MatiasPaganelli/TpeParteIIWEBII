<?php
/* Smarty version 3.1.30, created on 2017-10-11 19:26:14
  from "C:\xampp\htdocs\web\WEB2\MVC-Visita\templates\Usuario\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de5436b1f362_04820992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b431f301f0a9eb7dfe260a573901d44eea4062' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\MVC-Visita\\templates\\Usuario\\index.tpl',
      1 => 1507740213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de5436b1f362_04820992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container col-md-6 col-md-offset-3">
  <form action="verificarUsuario" method="post">
    <div class="form-group ">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresa email" required>
      <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su email (ni su contraseña).</small>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña" required>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
  </div>
<?php }
}
