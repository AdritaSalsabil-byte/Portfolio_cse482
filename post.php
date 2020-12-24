<?php
include "database.php";
   $db = new Database();
 if(isset($_POST['register'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $gender=$_POST['gender'];
  $skill=$_POST['skills'];
  $contact=$_POST['contact_no'];
  $email=$_POST['email'];
    $college=$_POST['collage'];

    if ($password ==$repassword){
    $query = "insert into user (name,username,password,gender,skills,contact_no,email,collage)
    Values('$name','$username','$password','$gender','$skill','$contact','$email','$college')";
    $qResult = $db->insert($query);
    if($qResult){
         header("Location:login.php?msg='Registration Successul'");
      }
  } else {
    $msg = "Password does not match, please re check.";
    header("Location:register.php?msg=$msg");
  }
}
  /*  session_start();
    $_SESSION['register']=true;
    $_SESSION['name']= $name;
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    $_SESSION['repassword']= $repassword;
    $_SESSION['gender']= $gender;
  $_SESSION['skill']= $skill;
  $_SESSION['contact']= $contact;
    $_SESSION['email']= $email;
    $_SESSION['college']= $college;
    header("Location:detail.php");
}*/
?>
