<?php
include "database2.php";
   $db2 = new Database2();
 if(isset($_POST['signin'])){

    $name=$_POST['name'];

  $email=$_POST['email'];
    $comment=$_POST['comment'];


    $query = "insert into contact (name,email,comment)
    Values('$name','$email','$comment')";
    $qResult = $db2->insert($query);
    if($qResult){
         header("Location:login.php?msg=' Successul'");
      }
  else {

    header("Location:register.php?msg='Recheck'");
  }
}

?>
