<?php
class LoginModel extends Model
{

  function getUser($userEmail)
  {
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute([$userEmail]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
}

 ?>
