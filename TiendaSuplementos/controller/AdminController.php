<?php
include_once 'model/AdminModel.php';
include_once 'view/AdminView.php';
include_once 'model/ImagenesModel.php';
/**
*
*/
class AdminController extends Controller
{
  protected $view;
  protected $model;

  function __construct()
  {
    $this->model=new AdminModel();
    $this->view=new Adminview();

    session_start();
    if (isset($_SESSION['email'])) {
      if (time() - $_SESSION['LAST_ACTIVITY'] > 10000000) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
    else {
      header('Location: '.LOGIN);
      die();
    }
  }
  function filtrarCategoria() {
    if (isset($_POST['filtrarAdmin'])) {
      $categoriaFiltrada = $_POST['filtrarAdmin'];
      $categorias=$this->model->getCategorias();
      $productos=$this->model->getProductos();
      $this->view->productosFiltradosAdmin($categorias,$productos,$categoriaFiltrada);
    }
  }
  public function categoriasAdmin(){
    $categorias=$this->model->getCategorias();
    $this->view->categoriasAdmin($categorias);
  }
  public function storeCategoria()
  {
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $descripcion=isset($_POST['descripcion']) ? $_POST['descripcion']: '';

    if ((isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
    (isset($_POST['descripcion']) && !empty($_POST['descripcion'])))
    {
      $this->model->storeCategoria($nombre,$descripcion);
      header('Location: '.CATEGORIASADMIN);
    }
    else{
      $this->view->errorCrearCategoria("Todos los campos son requeridos",$nombre,$descripcion);
    }
  }
  public function deleteCategoria($params)
  {
    $id_categoria = $params[0];
    $this->model->borrarCategoria($id_categoria);
    header('Location: '.CATEGORIASADMIN);
  }
  public function createCategoria()
  {
    $this->view->create();
  }
  public function productosAdmin()
  {
    $categorias=$this->model->getCategorias();
    $productos=$this->model->getProductos();
    $this->view->mostrarProductosAdmin($productos,$categorias);
  }
  public function deleteProducto($params)
  {
    $id_producto = $params[0];
    $this->model->borrarProducto($id_producto);
    header('Location: '.HOMEADMIN);
  }
  public function createProducto()
  {
   $categorias=$this->model->getCategorias();
    $this->view->createProducto($categorias);
  }

  public function storeProducto()
  {
    $rutaTempImagen = $_FILES['imagen']['tmp_name'];
    $categoria= isset($_POST['id_categoria']) ? $_POST['id_categoria'] : 0;
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $precio=isset($_POST['precio']) ? $_POST['precio']: 0;
    $peso=isset($_POST['peso']) ? $_POST['peso'] : 0;

    if ((isset($_POST['nombre']) && !empty($_POST['nombre']))
    && (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
    (isset($_POST['precio']) && !empty($_POST['precio'])) && (isset($_POST['peso']) && !empty($_POST['peso'])))
    {
      $this->model->storeProducto($categoria,$nombre,$precio,$peso);
      header('Location: '.HOMEADMIN);
      if($_FILES['imagen']['type'] == 'image/jpeg') {
        $this->model->guardarProducto($categoria, $nombre, $precio,$peso,$rutaTempImagen);
      }
      else{
        $this->view->errorCrear("La imagen tiene que ser JPG.", $titulo, $descripcion, $completada);
      }
    }
    else{
      $this->view->errorCrearProducto("Todos los campos son requeridos",$categoria,$nombre,$precio,$peso);
    }
  }











  public function store()
  {
    $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
    $categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 0;
    $peso = isset($_POST['peso']) ? $_POST['peso'] : 0;
    if ((isset($_POST['nombre']) && !empty($_POST['nombre']))
    && (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
    (isset($_POST['precio']) && !empty($_POST['precio'])) && (isset($_POST['peso']) && !empty($_POST['peso']))){
      if($this->sonJPG($_FILES['imagenes']['type'])) {
        $this->model->guardarProducto($categoria,$nombre,$precio,$peso,$rutaTempImagenes);
        header('Location: '.HOME);
      }
      else{
        $this->view->errorCrearProducto("Las imagenes tienen que ser JPG.", $categoria,$nombre,$precio,$peso);
      }
    }
    else{
      $this->view->errorCrearProducto("El campo titulo es requerido", $categoria,$nombre,$precio,$peso);
    }
  }
}
?>
