<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 4/29/2018
 * Time: 1:07 AM
 */


session_start();
$user=$_SESSION['username'];
$mytext="";
$db=mysqli_connect('localhost','root','','dp');

//if(isset($_POST['mytext'])) {
//  $mytext = $_POST['mytext'];
$query = "INSERT INTO result(username,lesson,point) VALUES('$user','math','0')";
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

    <!-- Bootstrap core CSS -->
    <link href="../hardluck/vendor2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../hardluck/hardluck_style.css" rel="stylesheet">

    <!-- Custom styles for this template -->

  </head>

  <body id="body">


  <header>
    <div class="container">
      <div class="logo">
        <img class="logoimg" src="../hardluck/logo.png" alt="logo">
      </div>
      <nav>
        <ul>
          <li class="current"><a href="#featured">logout</a></li>
            <a href="../su/udatephp.php">view profile</a>
        </ul>
      </nav>
    </div>
  </header>



  <audio controls autoplay>

    <source src="../hardluck/fail.mp3" type="audio/mpeg">

  </audio>

  <p class="cheerup">You still got more chances. Focus well, don't stop and keep going!</p>

  <form action="numbers_test_page.html">

      <input  type="submit" class="do" value="do test again">
  </form>

  <form action="../categ/categ-page-main.php">
      <input type="submit" class="exit" value="exit" >
  </form>




















    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../hardluck/hardluck_script.js"></script>

  </body>

</html>

