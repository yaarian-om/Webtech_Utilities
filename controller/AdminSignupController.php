<?php


require_once '../model/UserRepo.php';


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

//    Make all kinds of PHP validation check here and everything is OK, then search the user based on the id and password
//    Make all kinds of PHP validation check here and everything is NOT OK, then redirect to the LOGIN page again

    $data = createUser($email, $password,"admin");

    if($data < 0){

//   There is a problem while inserting the data
        header("Location: /WEBTECH Learn/view/AdminSignup.php");
    }

header("Location: /WEBTECH Learn/view/Login.php");

