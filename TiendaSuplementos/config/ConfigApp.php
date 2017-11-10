<?php

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'ProductosController#productos',
    'index'=> 'ProductosController#productos',
    'filtrar'=>'ProductosController#filtrarCategoria',
    'indexAdmin'=> 'AdminController#productosAdmin',
    'proteinasAdmin'=> 'AdminController#proteinasAdmin',
    'creatinasAdmin'=> 'AdminController#creatinasAdmin',
    'preentrenosAdmin'=> 'AdminController#preentrenosAdmin',
    'ganadoresAdmin'=> 'AdminController#ganadoresAdmin',
    'categoriasAdmin'=> 'AdminController#categoriasAdmin',
    'proteinas'=> 'ProductosController#proteinas',
    'creatinas'=> 'ProductosController#creatinas',
    'preentrenos'=> 'ProductosController#preentrenos',
    'ganadores'=> 'ProductosController#ganadores',
    'categorias'=> 'CategoriasController#categorias',
    'login'=>'LoginController#login',
    'logout' => 'LoginController#destroy',
    'verificarUsuario'=>'LoginController#verify',
    'agregarProducto'=>'AdminController#createProducto',
    'guardarProducto'=>'AdminController#storeProducto',
    'borrarProducto'=>'AdminController#deleteProducto',
    'borrarCategoria'=>'AdminController#deleteCategoria',
    'agregarCategoria'=>'AdminController#createCategoria',
    'guardarCategoria'=>'AdminController#storeCategoria',
    'filtrarAdmin'=>'AdminController#filtrarCategoria'
  ];
}
?>
