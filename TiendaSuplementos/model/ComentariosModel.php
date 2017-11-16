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

  function getComentariosProducto($id_producto)
		{
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_producto = ?');
			$sentencia->execute([$id_producto]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

    function getComentariosUsuario($fk_id_usuario)
		{
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE fk_id_usuario = ?');
			$sentencia->execute([$fk_id_usuario]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

    function getComentario($id)
		{
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id = ?');
			$sentencia->execute([$id]);
			return $sentencia->fetch(PDO::FETCH_ASSOC);
		}

      function createComentario($fk_id_usuario, $id_producto, $descripcion, $calificacion)
		{
			$sentencia = $this->db->prepare('INSERT INTO comentario(fk_id_usuario, id_producto, descripcion, calificacion) VALUES(?,?,?,?)');
			$sentencia->execute([$fk_id_usuario, $id_producto, $descripcion, $calificacion]);
		}


		function deleteComentario($id)
		{
			$sentencia = $this->db->prepare('DELETE FROM comentario WHERE id = ?');
			$sentencia->execute([$id]);
		}

}


?>
