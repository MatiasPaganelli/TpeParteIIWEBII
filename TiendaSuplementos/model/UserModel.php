<?php /**
 *
 */
class UserModel extends Model
{

  function getCategorias()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM categoria ORDER BY nombre");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductos()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProducto($id_producto)
  {
    $sentencia = $this->db->prepare( "SELECT * FROM producto WHERE id=?");
    $sentencia->execute([$id_producto]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>
