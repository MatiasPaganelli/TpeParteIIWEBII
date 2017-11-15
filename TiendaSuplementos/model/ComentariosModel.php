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

  function getComentariosProducto($id)
		{
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE $fk_id_usuario = ?');
			$sentencia->execute([$id]);
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

    function createComentario($fk_id_usuario, $fk_usuario, $fk_id_celular, $fk_puntaje, $textocomentario)
		{
			$sentencia = $this->db->prepare('INSERT INTO comentario(fk_id_usuario, id_producto, calificacion, descripcion) VALUES(?,?,?,?,?)');
			$sentencia->execute([$fk_id_usuario, $id_producto, $calificacion, $descripcion]);
		}


		function deleteComentario($id)
		{
			$sentencia = $this->db->prepare('DELETE FROM comentario WHERE id = ?');
			$sentencia->execute([$id]);
		}

}


?>
