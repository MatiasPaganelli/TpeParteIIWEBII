<?php
/* Smarty version 3.1.30, created on 2017-10-11 00:19:44
  from "C:\xampp\htdocs\web\1°AÑO-2°CUATRIMESTRE\WEB2\MVC\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dd47806a1a45_55980034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d929853b19aee31a9f424435c7af820115cc2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\1°AÑO-2°CUATRIMESTRE\\WEB2\\MVC\\templates\\header.tpl',
      1 => 1507548688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dd47806a1a45_55980034 (Smarty_Internal_Template $_smarty_tpl) {
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
  <a href="logout">Logout</a>
  <div class="container">
<?php }
}
