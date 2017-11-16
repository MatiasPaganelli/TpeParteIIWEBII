<?php

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'ProductosController#productos',
    'index'=> 'ProductosController#index',
    'filtrar'=>'ProductosController#filtrarCategoria',
    'indexAdmin'=> 'AdminController#productosAdmin',
    'indexUser'=> 'UserController#productosUser',
    'login'=>'LoginController#login',
    'logout' => 'LoginController#destroy',
    'verificarUsuario'=>'LoginController#verify',
    'filtrarUser'=>'UserController#filtrarCategoria',
    'agregarProducto'=>'AdminController#createProducto',
    'guardarProducto'=>'AdminController#storeProducto',
    'borrarProducto'=>'AdminController#deleteProducto',
    'borrarCategoria'=>'AdminController#deleteCategoria',
    'agregarCategoria'=>'AdminController#createCategoria',
    'guardarCategoria'=>'AdminController#storeCategoria',
    'filtrarAdmin'=>'AdminController#filtrarCategoria',
    'createUsuario'=>'AdminController#createUsuario',
    'storeUsuario'=>'AdminController#storeUsuario',
    'AdminUsuarios'=>'AdminController#administrarUsuarios',
    'cambiarPermiso'=>'AdminController#cambiarPermiso',
    'comentarios'=>'AdminController#comentarios',
    'comentariosUser'=>'UserController#comentarios',
    'detalleProductoAdmin'=>'AdminController#detalleProductoAdmin',
    'detalleProductoUser'=>'UserController#detalleProductoUser',
    'detalleProducto'=>'ProductosController#detalleProducto'
  ];
}
?>
