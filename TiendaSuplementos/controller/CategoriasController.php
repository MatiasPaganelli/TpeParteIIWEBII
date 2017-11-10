<?php

include_once 'view/Categoriasview.php';
include_once 'model/CategoriasModel.php';

class CategoriasController extends Controller
{
  function __construct()
  {
    $this->view=new CategoriasView();
    $this->model=new CategoriasModel();
  }
  public function categorias(){
    $categorias=$this->model->getCategorias();
    $this->view->categorias($categorias);

  }

}

 ?>
