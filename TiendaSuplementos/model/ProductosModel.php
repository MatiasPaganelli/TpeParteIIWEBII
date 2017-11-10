<?php

class ProductosModel extends Model
{

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

}

?>
