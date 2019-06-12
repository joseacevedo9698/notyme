
<?php

  $username = $_POST['user'];
  $password = $_POST['pass'];
  $tbl_name = "persona";
  include('../model/loginmodel.php');
  $login = new LoginModel();
  $login->LoginModel();
  $resp= $login->Consultaruser($username,$password);


    if ($resp==0) {
      header("Location: ../index.php?errorp=1");
      exit();
    }else{
      if ($resp==-1) {
        header("Location: ../index.php?error=1");
        exit();
      }
     else{
        session_start();
    $_SESSION['persona'] = $resp;
      header("Location: ../view/acceso.php");
    }
    }
 ?>
