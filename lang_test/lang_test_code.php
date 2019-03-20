<?php


session_start();
$user=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','dp');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Language Test</title>
    <link href="css2/lang_test_style.css" rel='stylesheet' type='text/css'/>
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
     <!-- CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- JS -->
    <script type="text/javascript" src="js2/Get-StartedJS.js"></script>

	 <style>
    div#memory_board{
        background: url("img/patt.jpg");
        border-radius: 5px;
        border:#999 1px solid;
        width:523px;
        height:480px;
        margin-top: 10px;
        margin-left: 400px;

    }
    div#memory_board > div{

        background: rgba(173, 235, 235, 0.9);
        border-radius: 5px;
        border-style: solid;
        border-width: 1px;
        border-color: darksalmon;
        width:110px;
        height:100px;
        float:left;
        margin:10px;
        padding-left:20px;
       padding-right: 20px;
        padding-top: 40px;
        font-size:70px;
        cursor:pointer;
        text-align:center;
        color: #721c24;
    }
</style>

	<script>

    var memory_array = ['A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h'];
    var memory_values = [];
    var memory_tile_ids = [];
    var tiles_flipped = 0;
    Array.prototype.memory_tile_shuffle = function(){
        var i = this.length, j, temp;
        while(--i > 0){
            j = Math.floor(Math.random() * (i+1));
            temp = this[j];
            this[j] = this[i];
            this[i] = temp;
        }
    }
    function newresult()
    {
        window.location= 'success_page_code.php';
    }
    function newBoard(){
        tiles_flipped = 0;
        var output = '';
        memory_array.memory_tile_shuffle();
        for(var i = 0; i < memory_array.length; i++){
            output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
        }
        document.getElementById('memory_board').innerHTML = output;
    }
    function memoryFlipTile(tile,val){
        if(tile.innerHTML == "" && memory_values.length < 2){
            tile.style.background = '#33ff99';
            tile.innerHTML = val;
            if(memory_values.length == 0){
                memory_values.push(val);
                memory_tile_ids.push(tile.id);
            } else if(memory_values.length == 1){
                memory_values.push(val);
                memory_tile_ids.push(tile.id);
                if(memory_values[0].toLowerCase() == memory_values[1].toLowerCase()){
                    tiles_flipped += 2;
                    // Clear both arrays
                    memory_values = [];
                    memory_tile_ids = [];
                    // Check to see if the whole board is cleared
                    if(tiles_flipped == memory_array.length){

                      //  alert("Board cleared... generating new board");
                        //document.getElementById('memory_board').innerHTML = "";
                      //  newBoard();
                        newresult();
                        document.getElementById("result").value='5';
                        //window.location.replace("lang_test_style.html");

                    }
                } else {
                    function flip2Back(){
                        // Flip the 2 tiles back over
                        var tile_1 = document.getElementById(memory_tile_ids[0]);
                        var tile_2 = document.getElementById(memory_tile_ids[1]);
                    /*    tile_1.style.background = 'url(tile_bg.jpg) no-repeat';*/
                        tile_1.innerHTML = "";
                    /*    tile_2.style.background = 'url(tile_bg.jpg) no-repeat';*/
                        tile_2.innerHTML = "";
                        // Clear both arrays
                        memory_values = [];
                        memory_tile_ids = [];
                    }
                    setTimeout(flip2Back, 700);
                }
            }
        }
    }
</script>
</head>

<body>
<div class="container2">
<div class="layer">
    <!-- Banner -->
    <header class="default-header">
        <div class="container">
            <div class="header-wrap">
                <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo"></a>
                    </div
                    >
                    <div class="main-menubar d-flex align-items-center">
                        <nav  class="hide">
                            <form action="logoutcode.php" methode="post">
                            <a href="../categ/categ-page-main.php">   go back</a>

                                <input type="submit" name="logout" value="LOGOUT" >
                            </form> </nav>
                        <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

</div>

<div id="memory_board"></div>
<button ></button>



    <!-- Footer -->
    <div class="footer-w3l">
        <div class="botimg">
            <img src="img/logo.png">
        </div>
        <p class="agileinfo" style="font-family: nikotinus"> &copy; 2018 Curious Jr. All Rights Reserved </p>
    </div>

<script>
    function insert() {
        var m= new XMLHttpRequest();
        m.open("GET","m.php?name="+document.getElementById('name').value+"&email="+document.getElementById('email').value+"&pass="+document.getElementById('pass').value,flase);
        m.send(null);
    }
    /*function login() {
         var m= new XMLHttpRequest();
         m.open("post","k.php?&em="+document.getElementById('em').value+"&password="+document.getElementById('passs').value,flase);
         m.send(null);
     }*/
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

<script>newBoard();</script>

</body>
</html>


