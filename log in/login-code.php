<?php
session_start();
//connect to the database
$username="";
//$id="";
//$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','dp');

if(isset($_POST['login'])){

    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);

//ensure that form fields are filled
    if(empty($username)){
        array_push($errors,"username is required");}

    if(empty($password)){
        array_push($errors,"Password is required");}

    if (count($errors)==0) {
        //$password=md5($password);
        $query = "select * from user where username='$username' and password='$password'";
        $result = mysqli_query($db, $query);
        //$row=$result->fetch_assoc();
        // $t=$result;
        // $t=$row['typee'];
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            //$_SESSION[2]=$t;
            //   $_SESSION['type'] = $t;
            header('location:../categ/categ-page-main.php');
            //   echo $t ;
        }

        else{
            array_push($errors,"wrong username/password combination");
            //     header('location: login.php');
            header('location: login_page.html');
        }
    }
     else
     {
         header('location: login_page.html');
     }

}
//login user from login page
$db->close();
?>