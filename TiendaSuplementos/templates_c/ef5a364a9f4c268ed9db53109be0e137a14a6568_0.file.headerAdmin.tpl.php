<?php
/* Smarty version 3.1.30, created on 2017-11-09 21:27:57
  from "/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/headerAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04ba4dcf36e5_54359063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5a364a9f4c268ed9db53109be0e137a14a6568' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TPEWEBIIE2/TPE-WEB-II/TiendaSuplementos/templates/headerAdmin.tpl',
      1 => 1510258898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04ba4dcf36e5_54359063 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="container">
<?php }
}
