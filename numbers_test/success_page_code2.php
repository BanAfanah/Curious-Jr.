<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 4/29/2018
 * Time: 1:06 AM
 */


session_start();
$user=$_SESSION['username'];
$mytext="";
$db=mysqli_connect('localhost','root','','dp');

//if(isset($_POST['mytext'])) {
//  $mytext = $_POST['mytext'];
$query = "INSERT INTO result(username,lesson,point) VALUES('$user','math','5')";
mysqli_query($db, $query);
//  header('location:fav-page.php');


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Congratulations</title>
       <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="success_style.css" rel="stylesheet">
    <script src="success_script.js"></script>

    <!-- Custom styles for this template -->

  </head>

  <header>
    <div class="container">
      <div class="logo">
        <img class="logoimg" src="logo.png" alt="logo">
      </div>
      <nav>
        <ul><li><a href="../categ/categ-page-main.php">go back</a></li>
            <a href="../su/udatephp.php">view profile</a>
        </ul>
      </nav>
    </div>
  </header>

  <body id="body">

  <div id="overlay" onclick="off()"></div>

  <img class="points" src="points.gif" title="5 points are added to your score">
  <audio controls autoplay>

    <source src="cheering.mp3" type="audio/mpeg">

  </audio>

  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>




  <div class="div_mask" id="mask" >
    <a href="certificate.pdf" download="certificate">
      <button class="download_button" type="button">Download</button></a>
    <img  class="mask_img"src="cert.png">
  </div>



  <p id='pp' class="congrats">Very well done little curious!! We are so proud of you for reaching this level. Don't stop, keep going!</p>
  <button id='bb' class="view" type="button" onclick="show()">view my certificate</button>
<!--  <button class="exit" type="button">exit</button>-->


  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="success_script.js"></script>

  </body>

</html>

