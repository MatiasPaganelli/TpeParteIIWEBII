<?php

require_once '../model/ProductosModel.php';
require_once 'Api.php';

class ProductosApiController extends Api
{
  protected $model;
  function __construct()
  {
    $this->model=new ProductosModel();
  }


  public function getProductos($params = [])
  {
    switch (sizeof($params)) {
      case 0:
        $productos=$this->model->getProductos();
        return  $this->json_response($productos, 200);
        break;
      case 1:
        $id = $params[0];
        $producto =  $this->model->getProducto($id);
        if($producto)
        return  $this->json_response($producto, 200);
        else
        return  $this->json_response(false, 404);

      default:
        return  $this->json_response(false, 404);
        break;
    }
  }
}


 ?>
