<?php
class ConfigApi
{
  public static $RESOURCE = 'resource';
  public static $PARAMS = 'params';
  public static $METHOD = 'method';
  public static $RESOURCES = [
    'productos#GET' => 'ProductosApiController#getProductos',
    'productos#DELETE'=> 'ProductosApiController#deleteProducto',
    'productos#POST'=> 'ProductosApiController#createProductos'
  ];
}

?>
