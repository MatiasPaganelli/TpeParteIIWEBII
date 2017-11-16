<?php

class ProductosView extends View
{
  function productosFiltrados($categorias,$productos,$categoriaFiltrada)
  {
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $this->smarty->display('templates/Visit/productosFiltrados.tpl');
  }
function mostrarProductos($productos,$categorias){
  $this->smarty->assign('titulo','Index');
  ksort($productos);
  $this->smarty->assign('productos',$productos);
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('templates/Visit/productos.tpl');
}
function mostrarIndex($productos,$categorias){
  $this->smarty->assign('titulo','Index');
  $this->smarty->assign('productos',$productos);
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('templates/Visit/productos.tpl');
}
function detalleProducto($productos){
  $this->smarty->assign('productos',$productos);
  $this->smarty->assign('titulo', 'Detalles');
  $this->smarty->display('templates/Visit/detalleProducto.tpl');
}
}

?>
