<?php

class Loginview extends View
{

  public function mostrarLogin($error='')
  {
    $this->smarty->assign('titulo','Session Login');
    $this->smarty->assign('error',$error);
    $this->smarty->display('templates/login.tpl');
  }

}

 ?>
