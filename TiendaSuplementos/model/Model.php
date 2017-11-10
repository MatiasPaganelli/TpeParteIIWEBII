<?php
class Model
{

  protected $db;

  function __construct()
  {
    try {

      $this->db = new PDO('mysql:host='."localhost".';'
      .'dbname='."tienda_suplementos".';charset=utf8'
      , "root", "");
    } catch (PDOException $e) {
      buildDDBBfromFile("tienda_suplementos", 'database/tienda_suplementos.sql'); //ARCHIVO EXPORTADO DE LA BASE
    }

  }


}

 function buildDDBBfromFile($dbname, $dbfile) {
  try {
    $connection = new PDO('mysql:host='."localhost", "root", "");
    $connection->exec('CREATE DATABASE IF NOT EXISTS '.$dbname);
    $connection->exec('USE '. $dbname);
    $queries = loadSQLSchema($dbfile);
    $connection->exec($queries);


  } catch (PDOException $e) {
    echo $e;
  }

}

  function loadSQLSchema($dbfile) {
    $file = fopen($dbfile, "r");
    $getTablas = "";
    while(! feof($file))
    {
      $getTablas .= fgets($file);
    }

    fclose($file);
    return $getTablas;
  }



?>
