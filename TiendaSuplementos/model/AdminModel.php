<?php

/**
 *
 */
class AdminModel extends Model
{
  function getCategorias()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductos()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function storeProducto($categoria,$nombre,$precio,$peso)
  {
    $sentencia = $this->db->prepare( "INSERT INTO producto(id_categoria,nombre,precio,peso) VALUES (?,?,?,?)");
    $sentencia->execute([$categoria,$nombre,$precio,$peso]);
  }

  function borrarProducto($id_producto)
  {
    $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
    $sentencia->execute([$id_producto]);
  }
  function borrarCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id=?");
    $sentencia->execute([$id_categoria]);
  }
  function storeCategoria($nombre,$descripcion)
  {
    $sentencia = $this->db->prepare( "INSERT INTO categoria(nombre,descripcion) VALUES (?,?)");
    $sentencia->execute([$nombre,$descripcion]);
  }
}


 ?>
