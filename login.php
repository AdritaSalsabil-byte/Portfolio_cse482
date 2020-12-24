<?php
  session_start();
  if (isset($_COOKIE["cookieSet"])) {
    header("Location:dashboard.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<title>
Portfolio
</title>
</head>
<body>

<p class="groove"><h1> Mysa Salsabil Chowdhury </h1></p>

<nav>

  <ul>
 <li><a class="active" href="index.php">Home</a></li>
  <li>  <a href="aboutMe.php">About Me</a></li>
  <li>   <a href="contact.php">Contact</a></li>
  <li>   <a href="login.php">Login</a></li>
</ul>
    </nav>
<hr>
<div class="login-box" style="margin-left: 20px;margin-top: 150px;">
  <div>
    <form action="./target.php" method="post">
      <h2>
    <?php

      if (isset($_SESSION["error"])) {
        echo $_SESSION["error"];
      }

     ?></h2>
      <div class="user-box" style="height: 40px;margin-left: 60px;"><label for="uname">Username :       </label><br><input type="text" name="uname" required=<?php  if (isset($_SESSION["username"])) {
      echo $_SESSION["username"];
    }?>><br></div><br><br>
      <div  class="user-box" style="height: 40px;margin-left: 60px;"><label for='pass'>Password :      </label><br>  <input type="password" name="pass" required=""><br></div>
      <a href="#">

          <span></span>
          Login
        </a>

    <p>

    <a class="credit" href="registration.php">Registration</a></p>
    </form>

  </div>
  <hr>
  <h4>Connect with social media</h4>
  <div>

    <a href="https://www.facebook.com/adrita.salsabil.9" target="blank"><img width="65px" src="icons/fb.png"></a><a href="https://github.com/AdritaSalsabil-byte" target="blank"><img  width="65px" src="icons/github.png"></a><a href="https://www.linkedin.com/in/mysa-salsabil-3389371a8/" target="blank"><img width="65px" src="icons/linkedin.png"></a><a href="https://www.instagram.com/adrita_salsabil/" target="blank"><img width="60px" src="icons/insta.png"></a></div>


    <div class="footer">
      <hr>
      <h3 style="text-align: center;">©2020 Mysa Salsabil Chowdhury | All Rights Reserved</h3>
    </div>
</body>
</html>
<?php
  session_destroy();
 ?>
