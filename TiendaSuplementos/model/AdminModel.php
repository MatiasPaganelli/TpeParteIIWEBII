<?php

/**
 *
 */
class AdminModel extends Model
{
  function getCategorias()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM categoria ORDER BY nombre");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getUsuarios()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getProductos()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function storeProducto($categoria,$nombre,$precio,$peso,$imagen)
  {
    $destino_final = 'images/' . uniqid() . '.jpg';
     move_uploaded_file($imagen, $destino_final);
    $sentencia = $this->db->prepare( "INSERT INTO producto(id_categoria,nombre,precio,peso,images) VALUES (?,?,?,?,?)");
    $sentencia->execute([$categoria,$nombre,$precio,$peso,$destino_final]);
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
  function storeUsuario($userEmail,$userPassword,$tipoUsuario)
  {
    $sentencia = $this->db->prepare( "INSERT INTO usuario(email,password,tipo_usuario) VALUES (?,?,?)");
    $sentencia->execute([$userEmail,$userPassword,$tipoUsuario]);
  }
  function modificarProducto($id,$nombre,$descripcion)
  {
    $sentencia = $this->db->prepare( "UPDATE producto SET nombre=?, descripcion=? WHERE id=?");
    $sentencia->execute([$id,$nombre,$descripcion]);
  }
function changePermiso($tipo_usuario, $id){
  $sentencia = $this->db->prepare( "UPDATE usuario SET tipo_usuario=? WHERE id=?");
  $sentencia->execute([$tipo_usuario, $id]);
  }
}


 ?>
