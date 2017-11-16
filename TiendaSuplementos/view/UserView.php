<?php /**
 *
 */
class UserView extends View
{

  function productosFiltradosUser($categorias,$productos,$categoriaFiltrada) {
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('categoriaFiltrada',$categoriaFiltrada);
    $this->smarty->display('templates/User/productosFiltradosUser.tpl');
  }
  function categoriasUser($categorias)
 {
   $this->smarty->assign('titulo','Categorias');
   $this->smarty->assign('categorias',$categorias);
   $this->smarty->display('templates/User/categorias.tpl');
 }
  function mostrarProductosUser($productos,$categorias)
  {
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('titulo','Index');
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/User/indexUser.tpl');
  }
  function mostrarComentarios($comentarios,$productos){
    $this->smarty->assign('titulo','Comentarios');
    $this->smarty->assign('comentarios',$comentarios);
    $this->smarty->assign('productos',$productos);
    $this->smarty->display('templates/User/comentarios.tpl');
  }
  function detalleProducto($productos){
    $this->smarty->assign('productos',$productos);
    $this->smarty->assign('titulo', 'Detalles');
    $this->smarty->display('templates/User/detalleProducto.tpl');
  }
}
 ?>
