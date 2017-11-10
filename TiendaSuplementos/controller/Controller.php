<?php
define('HOME','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/index');
define('HOMEADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/indexAdmin');
define('CATEGORIASADMIN','http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/categoriasAdmin');
define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
define('LOGOUT', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/logout');
define('FILTRAR', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/filtrar');

class Controller
{
  protected $view;
  protected $model;
}


?>
