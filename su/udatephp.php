<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$username=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','dp');



$sqli="select picture from user where username='$username'";
$result=$db->query($sqli);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()) {
        $picture = $row['picture'];
// echo"<img src='$path' height='280' width='320'>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Curious Jr. Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="My Profile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- css files -->
    <link href="css2/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css2/cobox.css" rel="stylesheet" type="text/css">
    <link href="css2/portfolio.css" rel="stylesheet" type="text/css" media="all">
    <link href="css2/pro_style.css" rel="stylesheet" type="text/css" media="all">
    <!-- /css files -->
    <!-- font links -->
    <link href='//fonts2.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts2.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <!-- /font links -->
    <!-- js files -->
    <script src="js2/modernizr.custom.js"></script>
    <!-- /js files -->
</head>
<body background-color="red">


<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">
                        <img src="images2/logo.png" class="img-responsive">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">

                    <ul class="nav navbar-nav link-effect">

                        <li><a href="../categ/fav-page.php">Favorites</a></li>
                        <li><a href="../categ/categ-page-main.php">Go back</a></li>
                   <!--     <li><a href="#gallery">log out</a></li>-->

                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
<!-- Banner -->
<div class="banner">

    <!-- About -->
    <div class="about-me" id="about">
        <h3 id="tit" class="text-center slideanim">Edit profile</h3>
        <form action="updatejs.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="col-md-4 col-xs-12">
                        <div class="mydetails slideanim text-center">
    <!--
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                   <!-- <div class="mydetails slideanim text-center">
                        <img class="img-circle img-responsive" src="images2/pi2.jpg"
                             alt="Generic placeholder image" width="200" height="200">-->
                        <?php
                        echo' 
   
            
            <img class="img-circle img-responsive" alt="Generic placeholder image" width="200" height="200" src='.$picture.'>
            </div>
                </div>
          ';
                        ?>
                        <h3 id="name"></h3>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
<!--
                    </div>
                </div>-->
                <div class="col-md-8 col-xs-12">
                    <div class="myskills slideanim">
                        <h3 class="text-center">My Info</h3>
                        <p class="skill-text"></p>
                        <div class="skill-info">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td><h4 class="e">Password</h4></td>
                                        <td><input type="text" class="longline1"></td>
                                        <td><p></p></td>
                                    </tr>
                                    <tr>
                                        <td><h4 class="e">New Password</h4></td>
                                        <td><input type="text" class="longline1"></td>
                                        <td><p></p></td>
                                    </tr>
                                    <tr>
                                        <td><h4 class="e">profile picture</h4></td>
                                        <td>    <input type="file" id="photo" name="photo" accept="image/*" /></td>
                                        <td><p></p></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td> <input type="submit" value="update your information" name="update"></td>
                                    </tr>
                                    </form>
                                    <!--
                                    <tr>
                                        <td><h4>Wordpress</h4></td>
                                        <td><span class="longline4"></span><span class="shortline4"></span></td>
                                        <td><p>92%</p></td>
                                    </tr>
                                    <tr>
                                        <td><h4>HTML5</h4></td>
                                        <td><span class="longline5"></span><span class="shortline5"></span></td>
                                        <td><p>96%</p></td>
                                    </tr>
                                    -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /About -->





<!-- footer -->
<div class="contact-me" id="contact">

    <footer>
        <div class="copyright">
            <p class="text-center">© 2018 Curious Jr.</a></p>
        </div>
        <a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </footer>
</div>

<!-- /footer -->
<!-- js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- js files for banner slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(window).load(function() {

        // Slideshow for banner
        $("#slider").responsiveSlides({
            maxwidth: 1920,
            speed: 1000
        });


    });
</script>
<!-- /js files for banner slider -->
<!-- js files for portfolio -->
<script src="js/classie.js"></script>
<script src="js/helper.js"></script>
<script src="js/grid3d.js"></script>
<script>
    new grid3D( document.getElementById( 'grid3d' ) );
</script>
<!-- /js files for portfolio -->
<!-- js files for gallery -->
<script type="text/javascript" src="js/cobox.js"></script>
<!-- /js files for gallery -->
<!-- js for smooth scrolling -->

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });
    })

</script>
<!-- /js for smooth scrolling -->
<!-- js for sliding -->

<script>
    $(window).scroll(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
</script>
<!-- /js for sliding -->
<!-- /js files -->

</body>
</html>