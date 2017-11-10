<?php

class ProductosView extends View
{
  function productosFiltradosAdmin($categorias,$productos,$categoriaFiltrada)
  {
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $this->smarty->display('templates/Visit/productosFiltrados.tpl');
  }
function proteinas($productos){
  $this->smarty->assign('titulo','Proteinas');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/proteinas.tpl');
}
function mostrarProductos($productos,$categorias){
  $this->smarty->assign('titulo','Index');
  $this->smarty->assign('productos',$productos);
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('templates/inicioAjax.tpl');
}
function creatinas($productos){
  $this->smarty->assign('titulo','Creatinas');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/creatinas.tpl');
}

function preentrenos($productos){
  $this->smarty->assign('titulo','Pre Entrenos');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/preentrenos.tpl');
}

function ganadores($productos){
  $this->smarty->assign('titulo','Ganadores');
  $this->smarty->assign('productos',$productos);
  $this->smarty->display('templates/Visit/ganadores.tpl');
}
}

?>
