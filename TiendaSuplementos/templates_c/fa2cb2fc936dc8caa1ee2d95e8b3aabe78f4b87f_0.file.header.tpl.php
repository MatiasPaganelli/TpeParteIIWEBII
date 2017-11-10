<?php
/* Smarty version 3.1.30, created on 2017-10-11 15:08:16
  from "C:\xampp\htdocs\web\WEB2\MVC\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de17c0b3e4c9_76641955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2cb2fc936dc8caa1ee2d95e8b3aabe78f4b87f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\MVC\\templates\\header.tpl',
      1 => 1507727296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de17c0b3e4c9_76641955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    </div>
    <h1>Bienvenidos</h1>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <!--  <li class="active"><a href="#">Historia de Tandil <span class="sr-only">(current)</span></a></li> -->
        <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <a href="proteinas"><li>asa</li></a>
          </ul>
        </li>
        <li><a href="contacto" id="">Contacto</a></li>
        <li><a href="login" id="">Login</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </nav>
  <!-- <a href="logout">Logout</a> -->
  <div class="container">
<?php }
}
