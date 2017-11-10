<?php
/* Smarty version 3.1.30, created on 2017-10-12 14:10:26
  from "C:\xampp\htdocs\web\WEB2\TiendaSuplementos\templates\headerAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df5bb23a5f44_86678221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92afd32224965ab6b4bb60afd662377a729b978c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\WEB2\\TiendaSuplementos\\templates\\headerAdmin.tpl',
      1 => 1507810224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df5bb23a5f44_86678221 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <li><a href="indexAdmin" class="index">Index</a></li>
        <li><a href="proteinasAdmin" class="proteinas">Proteinas</a></li>
        <li><a href="ganadoresAdmin" class="ganadores">Ganadores</a></li>
        <li><a href="creatinasAdmin" class="creatinas">Creatinas</a></li>
        <li><a href="preentrenosAdmin" class="preentrenos">PreEntrenos</a></li>
        <li><a href="categoriasAdmin" class="categorias">Categorias</a></li>
        <li><a href="agregarProducto">Agregar Producto</a></li>
        <li><a href="agregarCategoria">Agregar Categoria</a></li>
        <li><a href="logout" class="logout">Logout</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </nav>
  <div class="container">
<?php }
}
