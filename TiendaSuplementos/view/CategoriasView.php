<?php

class Categoriasview extends View
{
  public function categorias($categorias)
  {
    $this->smarty->assign('titulo','Categorias');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('templates/Visit/categorias.tpl');
  }
}

 ?>
