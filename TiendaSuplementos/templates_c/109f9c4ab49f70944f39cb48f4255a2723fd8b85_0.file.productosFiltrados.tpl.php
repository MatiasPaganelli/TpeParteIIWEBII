<?php
/* Smarty version 3.1.30, created on 2017-11-09 22:35:20
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/Visit/productosFiltrados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04ca1898b1c2_66742596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109f9c4ab49f70944f39cb48f4255a2723fd8b85' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/Visit/productosFiltrados.tpl',
      1 => 1510262019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a04ca1898b1c2_66742596 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/libs/plugins/function.html_image.php';
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
  <div class="container col-md-4 col-sm-6 col-lg-4">
    <form action="filtrar" method="POST">
      <select name="filtrar" class="form-control filter">
        <option value="" selected disabled hidden>Categorias</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
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
  <div class="container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['producto']->value['id_categoria'] == $_smarty_tpl->tpl_vars['categoriaFiltrada']->value) {?>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="thumbnail">
          <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

          <div class="caption">
            <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
            <p>Precio:<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
            <p>Peso: <?php echo $_smarty_tpl->tpl_vars['producto']->value['peso'];?>
</p>
          </div>
        </div>
      </div>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
