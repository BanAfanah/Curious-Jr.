<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 4/27/2018
 * Time: 4:09 PM
 */

session_start();
//connect to the database
$username="";
//$id="";
//$birthday="";
$errors=array();

$db=mysqli_connect('localhost','root','','dp');


if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    //$birthday = mysqli_real_escape_string($db, $_POST['birthday']);
    //  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    //  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    $target_path = "userimages/";//
    $target_path = $target_path . basename($_FILES['photo']['name']);

//ensure that form fields are filled
    if (empty($username)) {
        array_push($errors, "username is required");
    }
    /* if (empty($email)) {
         array_push($errors, "Email is required");
     }
     if (empty($birthday)) {
         array_push($errors, "Email is required");
     }*/
    if (empty($password)) {
        array_push($errors, "password is required");
    }

    /*
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords are not match");
    }*/

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        /*
                if ($user['email'] === $email) {
                    array_push($errors, "email already exists");
                }*/
    }
    if (count($errors) == 0) {
        // $password = md5($password);//encrypt the password before saving in the database
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
            $query = "INSERT INTO user (username, password,picture) 
  			  VALUES('$username','$password','$target_path')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            $_SESSION['success'] = "user";
            header('location:../categ/categ-page-main.php');
        } else {
            header('location:index.html');
        }
    }
    else{
            header('location:index.html');
        }



}
//login user from login page
$db->close();
?>