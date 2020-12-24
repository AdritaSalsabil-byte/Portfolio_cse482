
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
<div class="login-box" style="margin-left: 20px;margin-top: 450px;">
  <?php
         if(isset($_GET['msg'])){
           $msg = $_GET['msg'];
           echo "<p style='color:red;text-align:center;'>".$msg."</p>";
         }

         ?>
  <div>
  <form  name="LoginForms"  action="post.php" method="POST" onsubmit="return formValidation();">

<div class="user-box">  <label for="username" >Name :       </label><br><label style="color:blue;margin-left:10px;" id="nameError"></label>
  <input type="text"  id="name" name="name" required><br></div>
    <div class="user-box">  <label for="username" >Username :       </label><br><label style="color:blue;margin-left:10px;" id="usernameError"></label>
      <input type="text" id="username" name="username" required><br></div>
      <div class="user-box">  <label for="pass" >Password :      </label><br><label style="color:blue;margin-left:10px;" id="passwordError"></label>
        <input type="password" id="password" name="password"><br></div>
      <div class="user-box">  <label for="pass">Re-type Password :      </label><br>
        <input type="password" id="password" name="repassword"><br></div><br>

  <div class="you">    <label> Gender :       </label><label style="color:blue;margin-left:10px;" id="genderError"></label>
    <input  type="radio" id="male" name="gender"  value="male" >
      Male
      <input  type="radio" id="female" name="gender" value="female">
      Female
      <input type="radio" id="other" name="gender" value="other">
      Other
      <br><br>
      <label>Skills : </label><input type="checkbox" id="Java" name="skills" value="Java">
            Java
            <input type="checkbox" id="Android" name="skills" value="Android">
            Android
            <input type="checkbox" id="Ruby" name="skills" value="Ruby">
           Ruby
           <input type="checkbox" id=".Net" name=".skills" value=".Net">
           .Net <br><br>
    <div class="user-box"> <label for="con" >Contact no :       </label><br><label style="color:blue;margin-left:10px;" id=contactError></label>
      <input type="text" name="contact_no" required><br></div>
    <div class="user-box">  <label for="mail">Email :       </label><br><input type="text" name="email" required><br></div>
    <br>
      <label>College :       </label><select name="collage">
        <option>Select College</option>
        <option>Viqarunnisa Noon School & College</option>
        <option>Milestone  College</option>
        <option>Notre Dame College, Dhaka </option>
        <option>Ideal School and  College, Dhaka </option>
        <option>Holy Cross College, Dhaka </option>
        <option>Govt. Science College, Dhaka </option>

      </select>
<div class="user-box">
    <a href="#">

<span></span>
<span></span>
            <span></span>
              <input type="submit" name="register" value="Register">
          </a>

    </form>



<script type="text/javascript">
    function formValidation() {
        var name = document.forms["LoginForms"]["name"].value;
      var username = document.forms["LoginForms"]["username"].value;
      var password = document.forms["LoginForms"]["password"].value;
        var gender = document.forms["LoginForms"]["gender"].value;
          var contact_no = document.forms["LoginForms"]["contact_no"].value;
      var flag = true;
      var passwordLength = /^[a-zA-Z0-9!@$%]{8,32}$/;
        var nameChk = /^$/;
        var whiteSpace =/\s/;
      var usernameChk = /^$/;
        var genderChk = /^$/;
          var contact_noChk = /^[0-9]/;
      if (name == ' ') {
        document.getElementById('nameError').innerHTML="Name is empty please enter a Name";

        flag = false;
      }
      if (username == ' ') {
        document.getElementById('usernameError').innerHTML="Username is empty please enter a Name";

        flag = false;
      }
      if (gender == ' ') {
        document.getElementById('genderError').innerHTML="Please Select gender don't leave it empty";

        flag = false;
      }

      if(whiteSpace.test(username)) {
    document.getElementById('usernameError').innerHTML="Username cannot contains white space";
    flag = false;
  }
  if(!passwordLength.test(password)) {
    document.getElementById('passwordError').innerHTML="Password length must be between 8-32";
    flag = false;
  }
  if(!contact_noChk.test(contact_no)) {
          document.getElementById('contactError').innerHTML="Contact must contains numbers only";
          flag = false;
        }
      flag = false;

    return flag;
  }
  </script>


  <hr>
            <P>Already have an account ? <a href="login.php"> Login here</a></P>
</div>
</div>
<hr>
<h4>Connect with social media</h4>
<div>
  <a href="https://www.facebook.com/adrita.salsabil.9" target="blank"><img width="65px" src="icons/fb.png"></a><a href="https://github.com/AdritaSalsabil-byte" target="blank"><img  width="65px" src="icons/github.png"></a><a href="https://www.linkedin.com/in/mysa-salsabil-3389371a8/" target="blank"><img width="65px" src="icons/linkedin.png"></a><a href="https://www.instagram.com/adrita_salsabil/" target="blank"><img width="60px" src="icons/insta.png"></a></div>


  <div class="footer">
    <hr>
    <h3 style="text-align: center;"> ©2020 Mysa Salsabil Chowdhury | All Rights Reserved</h3>
  </div>
</body>
</html>
