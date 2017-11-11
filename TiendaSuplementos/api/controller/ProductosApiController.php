<?php
include_once '../model/ProductosModel.php';
require_once 'Api.php';
/**
*
*/
class ProductosApiController extends Api
{
  protected $model;
  function __construct()
  {
    parent::__construct();
    $this->model=new ProductosModel();
  }
  public function getProductos($url_params = [])
  {
    switch (sizeof($url_params)) {
      case '0':
      $productos=$this->model->getProductos();
      return $this->json_response($productos, 200);
      break;
      case '1':
      $id_producto = $url_params[0];
      $producto=$this->model->getProducto($id_producto);
      if ($producto) {
        return $this->json_response($producto, 200);
      }
      else {
        return $this->json_response('Endpoint mal escrito', 404);
      }
      default:
      return $this->json_response('Endpoint not found, inexistente', 404);
      break;
    }
  }
  public function deleteTareas($url_params = [])
  {
    switch (sizeof($url_params)) {
      case 0:
      return $this->json_response(false, 400);
      break;
      case 1:
      $id_producto = $url_params[0];
      $producto = $this->model->getTarea($id_producto);
      if($producto)
      {
        $this->model->borrarProducto($id_producto);
        return $this->json_response("Borrado exitoso.", 200);
      }
      else{
        return $this->json_response(false, 404);
      }
      default:
      return $this->json_response(false, 404);
      break;
    }
  }
  public function createTareas($url_params = []) {
    if(sizeof($url_params) == 0) {
      $body = json_decode($this->raw_data);
      $nombre = $body->nombre;
      $descripcion = $body->descripcion;
      $producto = $this->model->guardarTarea($nombre, $descripcion);
      return $this->json_response($producto, 200);

    }
    else {
      return $this->json_response(false, 404);
    }
  }

  public function editProducto($url_params = []) {
    $body = json_decode($this->raw_data);
    $id = $url_params[":id"];
    $nombre = $body->nombre;
    $descripcion = $body->descripcion;
    $producto = $this->model->modificarProducto($id, $nombre, $descripcion);
    return $this->json_response($producto, 200);
  }
}


?>
