<?php
  session_start();
  $username = "";
  $password = "";
  if(isset($_POST['uname'])) {
    $username = $_POST['uname'];
  }

  if(isset($_POST['pass'])) {
    $password = $_POST['pass'];
  }

  if ($username == "Adrita" && $password == "09876") {
    setcookie("cookieSet", "YES", time() + (86400 * 60), "/");
    header("Location:dashboard.php");
  } else {
    $_SESSION["error"] = "Invalid Credentials";
    $_SESSION["username"] = $username;
    header("Location:login.php");
  }


 ?>
