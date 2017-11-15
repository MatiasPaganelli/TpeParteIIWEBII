<?php
define('ACTION', 0);
define('PARAMS', 1);
include_once 'model/Model.php';
include_once 'view/View.php';
include_once 'controller/Controller.php';
include_once 'controller/AdminController.php';
include_once 'controller/CategoriasController.php';
include_once 'controller/ProductosController.php';
include_once 'controller/LoginController.php';
include_once 'config/ConfigApp.php';

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
  $urlData = parseURL($_GET['action']);
  $action = $urlData[ConfigApp::$ACTION]; //HOME
  if(array_key_exists($action,ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    $action = explode('#',ConfigApp::$ACTIONS[$action]); //ARRAY[0] -> TAREASCONTROLLER [1] -> INDEX
    $controller = new $action[0]();
    $metodo = $action[1];
    if(isset($params) &&  $params != null){
      echo $controller->$metodo($params);
    }
    else{
      echo $controller->$metodo();
    }
  }
}


?>
