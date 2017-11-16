<?php
/* Smarty version 3.1.30, created on 2017-11-16 03:28:02
  from "C:\xampp\htdocs\TPWebIIE2\TpeParteIIWEBII\TiendaSuplementos\templates\Visit\productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0cf7b2079ed7_86578589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe655ed3fbd9be22b158868c0a5925429547b125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWebIIE2\\TpeParteIIWEBII\\TiendaSuplementos\\templates\\Visit\\productos.tpl',
      1 => 1510798621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0cf7b2079ed7_86578589 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\TPWebIIE2\\TpeParteIIWEBII\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Lista de Productos:</h1>
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
<!-- <div class="container-fluid well">
  <div class="row">
    <div class="col-md-4 col-sm-6">
        <div id="carousel-noticia" class="carousel slide" data-ride="carousel" data-interval="10">
        <ol class="carousel-indicators">
          <li data-target="#carousel-noticia" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-noticia" data-slide-to="1"></li>
          <li data-target="#carousel-noticia" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <a href="detalleProducto"><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>
</a>
          </div>
          <div class="item">
            <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          </div>
          <div class="item">
            <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          </div>
        </div>


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
</div> -->
<a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
"><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>
</a>
<h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>

<!-- </div>
</div>
</div>
</div>
</div> -->
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
