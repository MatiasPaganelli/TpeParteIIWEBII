<?php
/* Smarty version 3.1.30, created on 2017-11-14 23:54:26
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Visit/productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0b7422684fb8_65760807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483150f761c13dd47473c595a528b0b68b1ab33b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/templates/Visit/productos.tpl',
      1 => 1510601698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0b7422684fb8_65760807 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2Carlos/TpeParteIIWEBII/TiendaSuplementos/libs/plugins/function.html_image.php';
?>
<h1>Lista de Productos SA:</h1>
<div class="row">
  <button id="refresh" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
  </button>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
<div class="container-fluid well">
  <div class="row">
    <div class="col-md-4 col-sm-6">
        <div id="carousel-noticia" class="carousel slide" data-ride="carousel" data-interval="10">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-noticia" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-noticia" data-slide-to="1"></li>
          <li data-target="#carousel-noticia" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          </div>
          <div class="item">
            <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          </div>
          <div class="item">
            <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-noticia" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-noticia" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
    <div class="caption">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<!-- <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>
 -->
<h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
<p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
<p>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</p>
<p>Precio:<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
<p>Peso: <?php echo $_smarty_tpl->tpl_vars['producto']->value['peso'];?>
</p>
</div>
</div>
</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
