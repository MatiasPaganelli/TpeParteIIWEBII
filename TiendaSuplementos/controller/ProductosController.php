<?php


include_once 'view/Productosview.php';
include_once 'model/ProductosModel.php';
include_once 'model/ImagenesModel.php';


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
  public function index()
  {
    $categorias=$this->modelcategorias->getCategorias();
    $productos=$this->model->getProductos();
    $this->view->mostrarIndex($productos,$categorias);
  }
  function filtrarCategoria() {
    if (isset($_POST['filtrar'])) {
      $categoriaFiltrada = $_POST['filtrar'];
      $categorias=$this->modelcategorias->getCategorias();
      $productos=$this->model->getProductos();
      $this->view->productosFiltrados($categorias,$productos,$categoriaFiltrada);
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
  public function detalleProducto($params){
      $id_producto = $params[0];
      $productos =$this->model->getProducto($id_producto);
      $this->view->detalleProducto($productos);
  }


}





?>
