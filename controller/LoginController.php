<?php

session_start();
require_once '../model/UserRepo.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<h1>HURRAY THIS IS A GET REQUEST</h1>';


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

//    Make all kinds of PHP validation check here and everything is OK, then search the user based on the id and password
//    Make all kinds of PHP validation check here and everything is NOT OK, then redirect to the LOGIN page again

    $data = findUserByEmailAndPassword($email, $password);
    $_SESSION['user_id'] = $data;

    if($data['type'] === 'admin'){
//        if the user is an ADMIN, then redirect to the Admin Dashboard
        header("Location: /WEBTECH Learn/view/Admin_Dashboard.php");
    }elseif ($data['type'] === 'student'){
//        if the user is an STUDENT, then redirect to the Student Dashboard
        header("Location: /WEBTECH Learn/view/Student_Dashboard.php");
    }




    echo '<h1>Email = </h1>'.$email;
    echo '<h1>Password = </h1>'.$password;


}





