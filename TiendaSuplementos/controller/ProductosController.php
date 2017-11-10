<?php


include_once 'view/Productosview.php';
include_once 'model/ProductosModel.php';

class ProductosController extends Controller
{
  protected $view;
  protected $model;
  protected $modelcategorias;

  function __construct()
  {
    $this->view=new ProductosView();
    $this->model=new ProductosModel();
    $this->modelcategorias=new CategoriasModel();
  }
  public function productos()
  {
    $categorias=$this->modelcategorias->getCategorias();
    $productos=$this->model->getProductos();
    $this->view->mostrarProductos($productos,$categorias);
  }
  function filtrarCategoria() {
    if (isset($_POST['filtrar'])) {
      $categoriaFiltrada = $_POST['filtrar'];
      $categorias=$this->modelcategorias->getCategorias();
      $productos=$this->model->getProductos();
      $this->view->productosFiltradosAdmin($categorias,$productos,$categoriaFiltrada);
    }
  }
  public function proteinas(){
    $productos=$this->model->getProductos();
    $this->view->proteinas($productos);

  }
  public function creatinas(){
    $productos=$this->model->getProductos();
    $this->view->creatinas($productos);

  }
  public function preentrenos(){
    $productos=$this->model->getProductos();
    $this->view->preentrenos($productos);

  }

  public function ganadores(){
    $productos=$this->model->getProductos();
    $this->view->ganadores($productos);

  }

}





?>
