<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 4/27/2018
 * Time: 4:09 PM
 */
//connect to the database
session_start();
$username=$_SESSION['username'];

$id="";
$birthday="";
$errors=array();
$target_path="";

$db=mysqli_connect('localhost','root','','dp');


if(isset($_POST['update'])) {
//    $username = mysqli_real_escape_string($db, $_POST['username']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
//    $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
    //  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    //  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


$target_path = "userimages/";//
    // $target_path = "C:/xampp/htdocs/New folder/sign up2/userimages/";
    $target_path = $target_path.basename($_FILES['photo']['name']);
//ensure that form fields are filled

    /* if (empty($email)) {
         array_push($errors, "Email is required");
     }
     if (empty($birthday)) {
         array_push($errors, "Email is required");
     }*/


    /*
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords are not match");
    }*/

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    //$user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
    //$result = mysqli_query($db, $user_check_query);
    //  $user = mysqli_fetch_assoc($result);

    // if ($user) { // if user exists
    // if ($user['username'] === $username) {
    //    array_push($errors, "Username already exists");
    //  }
    /*
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }*/
    //}

    if (empty($password)) {

    } else {
        $query = "update  user set password='$password' where username='$username'";
        mysqli_query($db, $query);
        header('location:../categories/index111.php');
    }
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
        $query = "update  user set picture='$target_path' where username='$username'";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        // $_SESSION['success'] = "You are now logged in";
        $_SESSION['success'] = "user";
        header('location:../categories/index111.php');
    }
    else
    {
        header('location:../categories/index111.php');
    }

}
//login user from login page
$db->close();
?>