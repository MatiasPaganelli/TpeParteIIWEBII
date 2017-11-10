<?php

class CategoriasModel extends Model
{
  function getCategorias()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function storeCategoria($nombre,$descripcion)
  {
    $sentencia = $this->db->prepare( "INSERT INTO categoria(nombre,descripcion) VALUES (?,?)");
    $sentencia->execute([$nombre,$descripcion]);
  }

  function borrarCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id=?");
    $sentencia->execute([$id_categoria]);
  }
}


 ?>
