<?php
include_once 'model/UserModel.php';
include_once 'view/UserView.php';
include_once 'model/ComentariosModel.php';
/**
*
*/
class UserController extends SecureController
{
  protected $view;
  protected $model;
  protected $comentariosmodel;

  function __construct()
  {
    parent::__construct();
    $this->comentariosmodel =new ComentariosModel();
    $this->model=new UserModel();
    $this->view=new UserView();
  }

  function comentarios()
  {
    $productos = $this->model->getProductos();
    $comentarios = $this->comentariosmodel->getComentarios();
    $this->view->mostrarComentarios($comentarios,$productos);
  }

  function filtrarCategoria(){
    if (isset($_POST['filtrarUser'])) {
      $categoriaFiltrada = $_POST['filtrarUser'];
      $categorias=$this->model->getCategorias();
      $productos=$this->model->getProductos();
      $this->view->productosFiltradosUser($categorias,$productos,$categoriaFiltrada);
    }
  }
  public function productosUser()
  {
    $categorias=$this->model->getCategorias();
    $productos=$this->model->getProductos();
    $this->view->mostrarProductosUser($productos,$categorias);
  }
  public function detalleProductoUser($params){
      $id_producto = $params[0];
      $productos =$this->model->getProducto($id_producto);
      $this->view->detalleProducto($productos);
  }

}
?>
