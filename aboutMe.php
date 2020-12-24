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
   <li>   <a href="index.php">Home</a></li>
    <li>  <a href="aboutMe.php">About Me</a></li>
    <li>   <a href="contact.php">Contact</a></li>
    <li>   <a href="login.php">Login</a></li>
  </ul>
      </nav>
      <hr>

      <div class="you"style="margin-left: 20px;">
        <p> Father's Name: MD Abu Taleb Chowdhury</p>
        <p>Mother's Name: Shahana Yeasmin</p>
        <p>Present Address: Road 13,Block:C Basundhara R/A, Dhaka</p>
        <p>Permanent Address: SEL,Anjuman Ara Haque Tower ,South Bagichagao, Comilla</p>
        <p>Hobby : Travelling & Cooking </p>
        <hr>
      </div>
      <div class="dropdown">

        <span>
        <h4>Educational Qualification</h4>
      </span>
<div class="you"style="margin-left: 20px;">
      <table border='' class='tb'>
      <tr>
      <th>Degree</th>
      <th>Institution</th>
      <th>Passing Year</th>
      <th>Board</th>
      <th>Group</th>
      <th>GPA</th>
      </tr>
      <?php
     $education = array(
                  "SSC" => array('Institution' => 'Comilla Modern High School', 'Passing Year' => 2014,'Board' => 'Comilla' , 'Group'=>'Science','GPA' => 4.81),

                  "HSC" => array('Institution' => 'Comilla Govt. Womens Collage','Passing Year' => 2016, 'Board' => 'Comilla','Group'=>'Science', 'GPA' => 4.75),

                  "BSc" => array('Institution' => 'North South University', 'Passing Year' => 'Ongoing','Board' => 'Not Applicable' ,'Group'=>'Not Applicable', 'GPA' => 3.38),
                        );
      foreach ($education as $key => $x1) {
                    echo "<tr>
                     <td>$key</td>";
                    foreach ($x1 as $x2) {
                    echo "<td>$x2</td>";
                                      }
                    echo "</tr>";
                                      }
        ?>
        </table>
      </div>
<div class="you"style="margin-left: 20px;">
  <p><b>Email: </b><a href="mailto: mysa.salsabil@northsouth.edu">mysa.salsabil@northsouth.edu </a><br><br><b>Another Email: </b><a href="mailto: adritasalsabil646@gmail.com"> adritasalsabil646@gmail.com</a></p>
  </div><br> <br>

  <h4>Connect with social media</h4>
  <div>
    <a href="https://www.facebook.com/adrita.salsabil.9" target="blank"><img width="65px" src="icons/fb.png"></a><a href="https://github.com/AdritaSalsabil-byte" target="blank"><img  width="65px" src="icons/github.png"></a><a href="https://www.linkedin.com/in/mysa-salsabil-3389371a8/" target="blank"><img width="65px" src="icons/linkedin.png"></a><a href="https://www.instagram.com/adrita_salsabil/" target="blank"><img width="60px" src="icons/insta.png"></a></div>


    <div class="footer">
      <hr>
      <h3 style="text-align: center;"> ©2020 Mysa Salsabil Chowdhury | All Rights Reserved</h3>
    </div>
</body>
</html>
