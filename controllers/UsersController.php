<?php
if( isset($_POST['operacion']) ) {
  require_once('../models/User.php');

  switch ($_POST['operacion']) {
    case 'login':
      $email = $_POST['email'];
      $password = $_POST['password'];

      $usuario = User::login($email,$password);
      if($usuario) {
        header('Location: ../index.php');
      } else {
        die("Tus datos son incorrectos");
      }
      break;

    default:
      # code...
      break;
  }


}
