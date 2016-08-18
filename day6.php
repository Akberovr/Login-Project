<?php
  session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$_SESSION['checkLogin'] = false;

if (isset($_POST['button'])) {

  if($email=='admin@code.edu.az' &&   $password=='123456'  || !empty($mail) && !empty($password)){
    $_SESSION['checkLogin'] = true;
      header("Location:home.php");
  }else{
      header("Location:day5.php");
      $_SESSION['errormsj'] = "wrong password or email";
  }
}else{
header("Location:day5.php");
}
 ?>
