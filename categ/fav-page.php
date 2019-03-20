<?php
$language="";
$art="";
$science="";
$logic="";
$math="";
$Entertainment="";
session_start();
$user=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','dp');

$query="select * from lessons where username='$user' and lesson='language'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$language="true";}

$query="select * from lessons where username='$user' and lesson='art'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$art="true";}

$query="select * from lessons where username='$user' and lesson='science'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$science="true";}

$query="select * from lessons where username='$user' and lesson='logic'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$logic="true";}
$query="select * from lessons where username='$user' and lesson='math'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$math="true";}



$query="select * from lessons where username='$user' and lesson='Entertainment'";
$result=mysqli_query($db,$query);
$userb = mysqli_fetch_assoc($result);
if($userb){$Entertainment="true";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curious Jr. Categories</title>
    <link href="css2/categ_style.css" rel='stylesheet'/>
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js2/Get-StartedJS.js"></script>
</head>


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
                                <a href="../su/udatephp.php">view profile</a> </a>
                                <input type="submit" name="logout" value="LOGOUT">
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
        <!-- #########################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../All letters/lang_page.html">
            <input type="image" class="rounded-circle img-fluid d-block mx-auto img-responsive" src="cat_img/lang22.jpg" >
</form>
                <?php
                if(!empty($language))
                {
                    echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="slanguage"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button>Languages
            </h3>
            </form>
</html>
 ';}
                ?>
                <?php
                if(empty($language))
                {
                    echo ' 

                <html>         
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdlanguage" style="cursor:pointer;background-color:transparent;
     border: 0px transparent;">
     <img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>Languages
            </h3>
</form>
</html> ';}?>
        </div>
        <!-- #########################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../numbers_slider/numbers_slider_page.html">
            <input type="image" class="rounded-circle img-fluid d-block mx-auto" src="cat_img/math22.jpg" alt="">
            </form><?php
            if(!empty($math))
            {
                echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="smath"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button>Maths:
                    </h3>
                    </form>
</html>
 ';} ?>
            <?php
            if(empty($math))
            {
                echo' 
                <html>
                
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdmath" style="cursor:pointer;background-color:transparent;
     border-color:transparent;"
    ><img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>Maths:
                    </h3></form>
</html> ';}?>
        </div>

        <!-- #########################################################################################-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../science/science_page.html">
            <input type="image"   class="rounded-circle img-fluid d-block mx-auto" src="cat_img/sci33.jpg" alt="">
        </form>
            <?php
            if(!empty($science))
            {
                echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="sScience"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button>Science:
                    </h3>
                    </form>
</html>
 ';} ?>
            <?php
            if(empty($science))
            {
                echo' 
                <html>
                
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdScience" style="cursor:pointer;background-color:transparent;
     border-color:transparent;"
    ><img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>Science:
                    </h3>
                    </form>
</html> ';}?>
        </div>

        <!-- #########################################################################################-->

        <div id="art" class="col-lg-4 col-sm-6 text-center mb-4">
            <form action="../paint2/paint_page.html">
            <input type="image"   class="rounded-circle img-fluid d-block mx-auto" src="cat_img/art11.jpg" alt="">
            <form>
                <?php
            if(!empty($art))
            {
                echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="sart"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button>Arts:
                    </h3>
                    </form>
                    
</html>
 ';} ?>
            <?php
            if(empty($art))
            {
                echo' 

                <html>
                
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdart" style="cursor:pointer;background-color:transparent;
     border-color:transparent;"
    ><img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>Arts:
                    </h3></form>
</html> ';}?>
        </div>
        <!-- #########################################################################################-->
        <div id="log" class="col-lg-4 col-sm-
            6 text-center mb-4">
            <form action="../logicgame1/logic_page.html">
            <input type="image"  class="rounded-circle img-fluid d-block mx-auto" src="cat_img/logic.jpg" alt="">
      </form>
            <?php
            if(!empty($logic))
            {
                echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="slogic"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button> Logical Thinking:
                        
                    </h3>    </form>
                  
</html>
 ';} ?>
            <?php
            if(empty($logic))
            {
                echo' 

                <html>
                
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdlogic" style="cursor:pointer;background-color:transparent;
     border-color:transparent;"
    ><img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>
                  Logical Thinking:
                     
                    </h3>               
  </form>
</html> ';}?>
        </div>

        <!-- #########################################################################################-->
        <div id="entr" class="col-lg-4 col-sm-6 text-center mb-4">

            <input type="image"  class="rounded-circle img-fluid d-block mx-auto" src="cat_img/fun.jpg" alt="">

            <?php
            if(!empty($Entertainment))
            {
                echo' 
<html>
            <form action ="#" method="post">
   <h3><button  type="submit" value="like" name="sEntertainment"
    style=" background-color:transparent; border-color:transparent;cursor:pointer;" >
   <img src="cat_img/star.png" style="width: 48px;height: 48px;margin-bottom: 10px;
  "></button>Entertainment:
                    </h3> 
                       </form>
                
</html>
 ';} ?>
            <?php
            if(empty($Entertainment))
            {
                echo' 

                <html>
                
            <form action ="#" method="post">
   <h3><button type="submit" value="dislike" name="sdEntertainment" style="cursor:pointer;background-color:transparent;
     border-color:transparent;"
    ><img src="cat_img/dstar.png" style="width: 48px;height: 48px;margin-bottom: 10px;"></button>
                       Entertainment:
                    </h3>
                    </form>
</html> ';}?>
        </div>


        <!-- #########################################################################################-->
    </div>

</div>
<!-- /.container -->




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
if(isset($_POST['slanguage'])){

    $query="select * from lessons where username='$user' and lesson='language'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){


        $query = "DELETE FROM lessons WHERE username= '$user' and lesson='language'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);

    }

}

if(isset($_POST['sdlanguage'])){


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
//*******************************************************************************************************
if(isset($_POST['smath'])){
    $query="select * from lessons where username='$user' and lesson='math'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='math'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
if(isset($_POST['sdmath'])){
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
//*********************************************************************************************

if(isset($_POST['sScience'])){
    $query="select * from lessons where username='$user' and lesson='Science'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='Science'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}

if(isset($_POST['sdScience'])){


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

///////////##############################################################################################################33

if(isset($_POST['sart'])){

    $query="select * from lessons where username='$user' and lesson='art'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='art'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }
}
if(isset($_POST['sdart'])){
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

if(isset($_POST['slogic'])){

    $query="select * from lessons where username='$user' and lesson='logic'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='logic'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);

    }
}
if(isset($_POST['sdlogic'])){
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
/////////////////////////////////////////////////////////////////////////////
////////////////////////////////////

if(isset($_POST['sEntertainment'])){

    $query="select * from lessons where username='$user' and lesson='Entertainment'";
    $result=mysqli_query($db,$query);
    $userb = mysqli_fetch_assoc($result);
    if($userb){
        $query= "DELETE FROM lessons WHERE username= '$user' and lesson='Entertainment'";
        //  $query="delete from lessons where username='$username' and lesson='language'";
        mysqli_query($db, $query);
    }

}
if(isset($_POST['sdEntertainment'])){
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
?>