<?php
/**
*
*/
class AdminView extends View
{
  function productosFiltradosAdmin($categorias,$productos,$categoriaFiltrada) {
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $this->smarty->display('templates/Admin/productosFiltradosAdmin.tpl');
  }
  public function categoriasAdmin($categorias)
  {
    $this->smarty->assign('titulo','Categorias');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('templates/Admin/categorias.tpl');
  }
  function mostrarProductosAdmin($productos,$categorias)
  {
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Admin/indexAdmin.tpl');
  }

  function proteinasAdmin($productos){
    $this->smarty->assign('titulo','Proteinas');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Admin/proteinas.tpl');
  }

  function creatinasAdmin($productos){
    $this->smarty->assign('titulo','Creatinas');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Admin/creatinas.tpl');
  }

  function preentrenosAdmin($productos){
    $this->smarty->assign('titulo','Pre Entrenos');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Admin/preentrenos.tpl');
  }
  function ganadoresAdmin($productos){
    $this->smarty->assign('titulo','Ganadores');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/Admin/ganadores.tpl');
  }
  function borrarProducto($id_producto)
  {
    $this->smarty->assign('producto',$id_producto);
    $this->smarty->display('templates/Admin/productos.tpl');
  }
  function createProducto()
  {
    $this->assignarProductoForm();
    $this->smarty->assign('titulo','Crear Productos');
    $this->smarty->display('templates/Admin/crearProducto.tpl');
  }
  private function assignarProductoForm($categoria=0, $nombre='', $precio='',$peso='')
  {
    $this->smarty->assign('categoria', $categoria);
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('precio', $precio);
    $this->smarty->assign('peso', $peso);

  }
  function errorCrearProducto($error,$categoria,$nombre,$precio,$peso)
  {
    $this->smarty->assign('titulo','MVC error');
    $this->assignarTareaForm($categoria,$nombre,$precio,$peso);
    $this->smarty->assign('error',$error);
    $this->smarty->display('templates/Admin/crearProducto.tpl');
  }
  public function create()
  {
    $this->assignarTareaForm();
    $this->smarty->assign('titulo','Crear Categorias');
    $this->smarty->display('templates/Admin/crearCategoria.tpl');
  }
  function errorCrearCategoria($error,$nombre,$descripcion)
  {
    $this->smarty->assign('titulo','MVC error');
    $this->assignarCategoriaForm($nombre,$descripcion);
    $this->smarty->assign('error',$error);
    $this->smarty->display('templates/Admin/crearCategoria.tpl');
  }
  private function assignarCategoriaForm($nombre='', $descripcion='')
  {
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('descripcion', $descripcion);
  }
}



?>
