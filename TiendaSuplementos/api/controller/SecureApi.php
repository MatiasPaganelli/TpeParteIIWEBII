<?php
/**
 *
 */
class SecureApi extends Api
{

  function __construct(argument)
  {
    # code...
  }

  function verify(){
    session_start();
    if (isset($_SESSION['email'])) {
      if (time() - $_SESSION['LAST_ACTIVITY'] > 10000000) {
        header('Location: '.LOGOUT);
        die();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }
    else {
      header('Location: '.LOGIN);
      die();
    }
  }
}



 ?>
