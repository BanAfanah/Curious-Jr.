<?php

session_start();
$user=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','dp');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js2/feedback_script.js"></script>
    <meta charset="UTF-8">
    <title>Curious Jr. Categories</title>
    <link href="css2/categ_style.css" rel='stylesheet'/>
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js2/Get-StartedJS.js"></script>
    <script type="text/javascript" src="js2/textarae.js"></script>

</head>
<body onload="hide()">

<div id="c" class="container2">
    <form action="feedback.php" method="post">
    <dialog id="window" class="window">
        <img src="bg.jpg" class="feed_img">

      <!--<input type="submit" id="feed" name="feedba" onclike="sendFeedback()" >-->
        <div class="text">Send feedback</div>
        <textarea id="feedback" name rows = "17" cols="60" placeholder="Tell us about your thoughts..."></textarea>
        <input type="submit" class="send" id="send" name="mytext" value="Send" onclick="sendFeedback()">
        <form action="categ-page-main.php">
        <button class="close" id="close" onclick="closeFeedback()">Close</button>
        </form>
    </dialog>
    </form>
</div>



<div class="layer">
    <!-- Banner -->
    <header class="default-header">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                        <nav class="hide">

                            <form action="logoutcode.php" methode="post">
                                <a href="../su/udatephp.php">view profile</a>

                                <input type="submit" name="logout" value="LOGOUT"  style="cursor:pointer">
                            </form> </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>









<!-- Page Content -->
<div  id="content">

    <!-- Introduction Row -->
    <h1 class="my-4">Hello!
        <small>Welcome to our curious world!</small>
    </h1>
    <p id="des" align="center">This is where you can start your journey of exploring from.</p>


    <div class="row">
        <div class="col-lg-12">
            <h2 class="my-4"></h2>
        </div>
<!-- #############################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../All letters/lang_page.html">
            <input type="image" class="rounded-circle img-fluid d-block mx-auto img-responsive" src="cat_img/lang22.jpg" >
            </form>
            <form action ="#" method="post">
                <button type="submit" value="like" name="language"  style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dlanguage" style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>

            </form>

            <h3>Languages
                <small class="sm">get social!</small>
            </h3>
            <p>Enjoy learning how to write and pronounce the alphabet letters in more than one language.</p>
        </div>
        <!-- #############################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../numbers_slider/numbers_slider_page.html">
            <input type="image" class="rounded-circle img-fluid d-block mx-auto" src="cat_img/math22.jpg" alt="">
                </form>
            <form action ="#" method="post">
                <button type="submit" value="like" name="math"  style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dmath" style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>

            </form>
            <h3>Maths:
                <small  class="sm">can you count to ten?</small>
            </h3>
            <p>Learn the numbers to ten and practise on them</p>
        </div>
        <!-- #############################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
<form action="../science/science_page.html">
            <input type="image"   class="rounded-circle img-fluid d-block mx-auto" src="cat_img/sci33.jpg" alt="">
            </form>
            <form action ="#" method="post">
                <button type="submit" value="like" name="Science"  style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dScience" style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>

            </form>
            <h3>Science:
                <small  class="sm">discover your world!</small>
            </h3>
            <p>Learn about your body, the space and much more.</p>
        </div>
        <!-- #############################################################################################-->

        <div id="art" class="col-lg-4 col-sm-6 text-center mb-4">
<form action="../paint2/paint_page.html">
            <input type="image"   class="rounded-circle img-fluid d-block mx-auto" src="cat_img/art11.jpg" alt="">
           </form>
            <form action ="#" method="post">
                <button type="submit" value="like" name="art"  style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dart" style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>

            </form>
            <h3>Arts:
                <small  class="sm">show us how talented you are!</small>
            </h3>
            <p>Learn the colors and try them on our special editor. </p>
        </div>
        <!-- #############################################################################################-->

        <div id="log" class="col-lg-4 col-sm-
            6 text-center mb-4">
            <form action="../logicgame1/logic_page.html">
            <input type="image"  class="rounded-circle img-fluid d-block mx-auto" src="cat_img/logic.jpg" alt="">
            </form>
                <form action ="#" method="post">
                <button type="submit" value="like" name="logic"  style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dlogic" style="cursor:pointer;background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>

            </form>
            <h3>Logical Thinking:
                <small  class="sm">be a great thinker!</small>
            </h3>
            <p>Change your way of thinking and learn how to solve problems logically.</p>
        </div>
        <!-- #############################################################################################-->
        <div id="entr" class="col-lg-4 col-sm-6 text-center mb-4">
            <input type="image"  class="rounded-circle img-fluid d-block mx-auto" src="cat_img/fun.jpg" alt="">
            <form action ="#" method="post">
                <button type="submit" value="like" name="Entertainment"  style="background-color:transparent; border-color:transparent;">
                    <img src="cat_img/like.png"  height="32px" width="32px"/> </button>
                <button type="submit" value="dislike" name="dEntertainment" style="background-color:transparent; border-color:transparent;">
                    <img src="cat_img/dislike.png" height="32px" width="32px"/> </button>
            </form>
            <h3>Entertainment:
                <small  class="sm">bored already?</small>
            </h3>
            <p>Try different fun activities away from the lessons.</p>
        </div>
        <!-- #############################################################################################-->
    </div>

</div>
<!-- /.container -->
<input type="image" src="feedback.png" name="send feedback" class="feedback_img" title="Send feedback?"
       onclick="openFeedback()" />
<!--<button type="submit" value="sendfeedback"
        name="sendfeedback" style="background-color:transparent; border-color:transparent;"
        onclick="openFeedback()"> <img src="feedback.png" name="send feedback" class="feedback_img"/> </button> -->


<!-- Footer -->
<div class="footer-w3l">
    <img src="img/logo.png" class="imgfooter">
    <p class="agileinfo" style="font-family: nikotinus"> &copy; 2018 Curious Jr. All Rights Reserved </p>
</div>

<script>
    function insert() {
        var m= new XMLHttpRequest();
        m.open("GET","m.php?name="+document.getElementById('name').value+"&email="+document.getElementById('email').value+"&pass="+document.getElementById('pass').value,flase);
        m.send(null);
    }

</script>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/parallax.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<?php
if(isset($_POST['language'])){

    $query="select * from lessons where username='$user' and lesson='language'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {

        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user', 'language')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

if(isset($_POST['dlanguage'])){


    $query="select * from lessons where username='$user' and lesson='language'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='language'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
//*******************************************************************************************************
if(isset($_POST['math'])){

    $query="select * from lessons where username='$user' and lesson='math'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {

        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user','math')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

if(isset($_POST['dmath'])){


    $query="select * from lessons where username='$user' and lesson='math'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='math'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
//*********************************************************************************************

if(isset($_POST['Science'])){

    $query="select * from lessons where username='$user' and lesson='Science'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {

        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user','Science')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

if(isset($_POST['dScience'])){


    $query="select * from lessons where username='$user' and lesson='Science'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='Science'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

///////////##############################################################################################################33

if(isset($_POST['art'])){

    $query="select * from lessons where username='$user' and lesson='art'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {

        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user', 'art')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
if(isset($_POST['dart'])){
    $query="select * from lessons where username='$user' and lesson='art'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='art'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

if(isset($_POST['logic'])){

    $query="select * from lessons where username='$user' and lesson='logic'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {
        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user', 'logic')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
if(isset($_POST['dlogic'])){
    $query="select * from lessons where username='$user' and lesson='logic'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='logic'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
/////////////////////////////////////////////////////////////////////////////
////////////////////////////////////

if(isset($_POST['Entertainment'])){

    $query="select * from lessons where username='$user' and lesson='Entertainment'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
    }
    else
    {

        $query = "INSERT INTO lessons (username,lesson)
  			  VALUES('$user', 'Entertainment')";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
if(isset($_POST['dEntertainment'])){
    $query="select * from lessons where username='$user' and lesson='Entertainment'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='Entertainment'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
?>