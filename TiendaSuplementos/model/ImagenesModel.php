<?php

/**
 *
 */
class ImagenModel extends Model
{


  function getImages()
  {
    $sentencia = $this->db->prepare("SELECT * FROM imagen ");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


}




 ?>
