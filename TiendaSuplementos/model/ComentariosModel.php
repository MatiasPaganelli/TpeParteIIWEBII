<?php
/**
*
*/
class ComentariosModel extends Model
{
  function getComentarios(){
    $sentencia = $this->db->prepare( "SELECT * FROM comentario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
}


?>
