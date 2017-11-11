<?php
/* Smarty version 3.1.30, created on 2017-11-11 18:36:46
  from "C:\xampp\htdocs\TPEWEBAjax\TpeParteIIWEBII\TiendaSuplementos\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a07352e086338_85077416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbc7a6a9fe61f5a226ed5ce597815a29d265148c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWEBAjax\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\login.tpl',
      1 => 1510421388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a07352e086338_85077416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
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
  </div>
<?php }
}
