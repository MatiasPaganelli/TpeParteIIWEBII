<?php /**
 *
 */
class SecureController extends Controller
{
  function __construct()
  {
    session_start();

 if($_SESSION['ADMIN'] == 'administrador')
 {
     if(isset($_SESSION['email']))
     {
         if (time() - $_SESSION['LAST_ACTIVITY'] > 400)
         {
             header('Location: '.LOGOUT);
             die();
         }
         $_SESSION['LAST_ACTIVITY'] = time();
     }
     else
     {
         header('Location: '.HOMEADMIN);
         die();
     }
 }
 else
 {
     header('Location: '.LOGIN);
     die();
 }
  }
}


 ?>
