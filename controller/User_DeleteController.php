<?php

require_once '../model/UserRepo.php';

$deletable_user_id = $_REQUEST['selected_user_id'];

echo '<h1>USER ID RECEIVED = '.$deletable_user_id.' </h1>';

$decision = deleteUser($deletable_user_id);

if($decision){
    header("Location: /WEBTECH Learn/view/List_Of_Users.php");
}else{
    header("Location: /WEBTECH Learn/view/Login.php");
}

