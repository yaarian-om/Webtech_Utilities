<?php

session_start();
require_once '../model/UserRepo.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<h1>HURRAY THIS IS A GET REQUEST</h1>';


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $user_id = $_SESSION['user_id'];

//    Make all kinds of PHP validation check here and everything is OK, then search the user based on the id and password
//    Make all kinds of PHP validation check here and everything is NOT OK, then redirect to the LOGIN page again

if($email !== null && $password !== null){

    $decision = updateUser($email, $password, $user_id);
    if($decision){
        header("Location: /WEBTECH Learn/view/Admin_Profile.php");
    }else{
        header("Location: /WEBTECH Learn/view/Login.php");
    }
}


    echo '<h1>Email = </h1>'.$email;
    echo '<h1>Password = </h1>'.$password;


}





