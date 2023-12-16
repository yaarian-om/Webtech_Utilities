<?php

session_start();


if($_SESSION['user_id'] <= 0){
    header("Location: /WEBTECH Learn/view/Login.php");
}

require_once '../model/UserRepo.php';

$Logged_in_user_info = null;
if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $Logged_in_user_id = $_SESSION['user_id'];
    $Logged_in_user_info = findUserByUserID($Logged_in_user_id);


}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome, Admin to your profile</h1>

<form action="/WEBTECH Learn/controller/Admin_UpdateController.php" method="post">
    <div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" id="email" value="<?php if($Logged_in_user_info !== null){echo $Logged_in_user_info['email'];}else{echo '';} ?>" name="email"> <br><br>

        <label for="password"><b>Password</b></label>
        <input type="text" id="password" placeholder="Enter Password" value="<?php if($Logged_in_user_info !== null){echo $Logged_in_user_info['password'];}else{echo '';} ?>" name="password"> <br><br>

        <button type="submit">Update</button>
    </div>
</form>


</body>
</html>
