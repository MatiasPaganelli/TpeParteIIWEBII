<?php
include_once 'view/LoginView.php';
include_once 'model/LoginModel.php';
include_once 'Controller.php';
class LoginController extends Controller
{

  function __construct()
  {
    $this->view=new LoginView();
    $this->model=new LoginModel();
  }


  public function login()
  {
    $this->view->mostrarLogin();
  }

  public function verify()
  {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if (isset($userEmail) && isset($userPassword)) {
      $user = $this->model->getUser($userEmail);
      if ((!empty($user)) && password_verify($userPassword,$user[0]['password'])) {
        session_start();
        $_SESSION['email'] = $userEmail;
        $_SESSION['LAST_ACTIVITY'] = time();
        $_SESSION['ADMIN'] = $user[0]['tipo_usuario'];
        if ($_SESSION['ADMIN'] == 'administrador') {
          header('Location: '.HOMEADMIN);

        }
        else {
          header('Location: '.HOMEUSER);
        }
      }
      else {
        $this->view->mostrarLogin('Email o Password incorrecto.');
      }
    }
  }

  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.HOME);
  }

}
?>
