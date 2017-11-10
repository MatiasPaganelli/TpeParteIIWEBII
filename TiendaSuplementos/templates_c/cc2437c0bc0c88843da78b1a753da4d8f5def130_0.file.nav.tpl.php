<?php
/* Smarty version 3.1.30, created on 2017-10-11 22:11:31
  from "C:\xampp\htdocs\web\WEB2\MVC-Visita\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59de7af36b55c0_35705822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2437c0bc0c88843da78b1a753da4d8f5def130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\MVC-Visita\\templates\\nav.tpl',
      1 => 1507752690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de7af36b55c0_35705822 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
          </ul>
        </li>
        <li><a href="proteinas" class="proteinas">Proteinas</a></li>
        <li><a href="ganadores" class="ganadores">Ganadores</a></li>
        <li><a href="creatinas" class="creatinas">Creatinas</a></li>
        <li><a href="preentrenos" class="preentrenos">PreEntrenos</a></li>
        <li><a href="login" class="login">Login</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </nav>
  <!-- <a href="logout">Logout</a> -->
  <div class="container">
<?php }
}
