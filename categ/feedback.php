<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 4/28/2018
 * Time: 7:36 PM
 */




session_start();
$user=$_SESSION['username'];
$mytext="";
$db=mysqli_connect('localhost','root','','dp');

if(isset($_POST['mytext'])) {
    $mytext=$_POST['mytext'];
    $query="INSERT INTO thefeedback(username,feedback) VALUES('$user','$mytext')";
    mysqli_query($db, $query);
    header('location:categ-page-main.php');
}
else {
    header('location:categ-page-main.php');

}?>