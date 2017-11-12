<?php
/* Smarty version 3.1.30, created on 2017-11-12 21:37:31
  from "C:\xampp\htdocs\TPWebIIE2Carlos\TpeParteIIWEBII\TiendaSuplementos\templates\headerAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a08b10b425831_47383620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64643d5f71b31a9dbcfcb8f09bde66a10b4b767b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWebIIE2Carlos\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\headerAdmin.tpl',
      1 => 1510518543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a08b10b425831_47383620 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">  <div class="col-md-4 col-sm-3 col-lg-4">
            <form action="filtrarAdmin" method="POST">
              <select name="filtrarAdmin" class="form-control filter">
                <option value="" selected disabled hidden>Categorias</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </select>
              <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
            </form>
            </div>
          </ul>
          <ul class=" indexAdmin nav navbar-nav navbar-right">
            <li><a href="#">IndexAdmin</a></li>
          </ul>
          <ul class=" logout nav navbar-nav navbar-right">
            <li><a href="logout">Logout</a></li>
          </ul>
          <ul class="crearProducto nav navbar-nav navbar-right">
            <li><a href="agregarProducto">Crear Producto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php }
}
