
<?php include "database.php";

        $db = new Database();
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
<h1> Mysa Salsabil Chowdhury </h1>

<nav>
  <ul>
 <li><a class="active" href="index.php">Home</a></li>
  <li>  <a href="aboutMe.php">About Me</a></li>
  <li>   <a href="contact.php">Contact</a></li>
  <li>   <a href="login.html">Login</a></li>
</ul>
    </nav>
<hr>
<div class="gallery">
  <a target="_blank" href="Image/Salsabil.jpg">
<img src="Image/Salsabil.jpg" alt="Salsabil"   class="round"   style="width:200px; height:200px;">
</a>

<div class="desc"><h5>Mysa Salsabil Chowdhury <br>
   Studies:Computer Science and Engineering at North South University</h5></div>
</div>
<hr>
<h2>
      <?php
      echo"You are logged In";
      ?></h2>
      <?php
             $query = "select * from user ";
             $qResult = $db->select($query);
             if($qResult){
                 while($result = $qResult->fetch_assoc()){
                   $name=$result['name'];
                   $username=$result['username'];
                   $password=$result['password'];
                   //$repassword=$result['repassword'];
                   $gender=$result['gender'];
                 $skill=$result['skills'];
                 $contact=$result['contact_no'];
                 $email=$result['email'];
                   $college=$result['collage'];

                 }
             }



      ?>
      <div class="you">
      <p> Name : <?php echo $name; ?></p>
     <p> Username : <?php echo $username; ?></p>
     <p>Gender : <?php echo $gender; ?></p>
     <p> skills : <?php echo $skill; ?></p>
     <p> College : <?php echo   $college; ?></p>
     <p> Contact No. : <?php echo $contact; ?></p>
     <p> Email : <?php echo $email; ?></p>

 </div>



      <br>

      <h4>Connect  with  social  media</h4>
      <div>
        <div>
          <a href="https://www.facebook.com/adrita.salsabil.9" target="blank"><img width="65px" src="icons/fb.png"></a><a href="https://github.com/AdritaSalsabil-byte" target="blank"><img  width="65px" src="icons/github.png"></a><a href="https://www.linkedin.com/in/mysa-salsabil-3389371a8/" target="blank"><img width="65px" src="icons/linkedin.png"></a><a href="https://www.instagram.com/adrita_salsabil/" target="blank"><img width="60px" src="icons/insta.png"></a></div>

      <div class="footer">
        <hr>
        <h3 style="text-align: center;"> ©2020 Mysa Salsabil Chowdhury | All Rights Reserved</h3>
      </div>
      </div>
      </body>
      </html>
