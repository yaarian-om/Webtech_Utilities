<?php


require_once '../model/UserRepo.php';
require_once '../model/StudentRepo.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$name = $_REQUEST['name'];

//    Make all kinds of PHP validation check here and everything is OK, then search the user based on the id and password
//    Make all kinds of PHP validation check here and everything is NOT OK, then redirect to the LOGIN page again

$data = createUser($email, $password,"student");


if($data < 0){

//   There is a problem while inserting the data
    header("Location: /WEBTECH Learn/view/StudentSignup.php");

}

$inserted_id = createStudent($name, $data);
if($inserted_id < 0){
    header("Location: /WEBTECH Learn/view/AdminSignup.php");
}

// Everything ok and data has been inserted
header("Location: /WEBTECH Learn/view/Login.php");


